var Template = {
  get : function (templateId) {
    var template = document.getElementById(templateId);
    if (template) {
      return template.innerHTML;
    } else {
      console.error("Could not find template for id :", templateId);
    }
  },
  
  apply : function (container, template, dict) {
    container = this._parseContainer(container);
    template = this._parseTemplate(template);
    var domElements = this.instantiate(template, dict, container.tagName);
    this.append(container, domElements);
  },
  
  instantiate : function (template, dict, containerType) {
    template = this._parseTemplate(template);
    containerType = containerType || 'div';
    var html = this._replace(template, dict);
    return this._createFromHTML(html, containerType);
  },

  append : function (container, domElements) {
    container = this._parseContainer(container);
    while (domElements.length > 0) {
      container.appendChild(domElements[0]);
    }
  },
  
  _parseContainer : function (container) {
    return typeof container === "string" ? document.querySelector(container) : container;
  },
  
  _parseTemplate : function (template) {
    return template.indexOf('<') === -1 ? this.get(template) : template;
  },

  _createFromHTML : function (html, containerType) {
    var dummyEl = document.createElement(containerType);
    dummyEl.innerHTML = html;
    return dummyEl.children;
  },

  _replace : function (template, dict) {
    for (var key in dict) {
      if (dict.hasOwnProperty(key)) {
        var value = dict[key];

        // special boolean keys keys key:default
        // if the value is a boolean, use default as value
        if (key.indexOf(':') !== -1) {
          if (value === true) {
            value = key.split(':')[1];
          } else if (value === false) {
            value = '';
          }
        }
        template = template.replace(new RegExp('\\{\\{'+key+'\\}\\}', 'g'), value);
      }
    }
    return template;
  }
};
