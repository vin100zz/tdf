var Dom = {
  /**
   * Check if a given HTML element is nested inside another
   * @param  {HTMLElement}  node  Element to test
   * @param  {HTMLElement}  parent Potential Ancestor for node
   * @param  {Boolean}      excludeParent set to true if the parent should be excluded from potential matches
   * @return {Boolean}      true if parent was found amongst the parentNode chain of node
   */
  isParent : function (node, parent, excludeParent) {
    node = this._parseNode(node);
    if (node && parent) {
      if (excludeParent) {
        node = node.parentNode;
      }
      while (node) {
        if (node === parent) {
          return true;
        }
        node = node.parentNode;
      }
    }
    return false;
  },

  getParentWithData : function (node, data) {
    node = this._parseNode(node);
    while (node) {
      if (node.dataset && typeof node.dataset[data] !== 'undefined') {
        return node;
      }
      node = node.parentNode;
    }
    return null;
  },

  reset : function (node) {
    node = this._parseNode(node);
    while (node.firstChild) {
      node.removeChild(node.firstChild);
    }
  },
  
  addEventListeners : function (inputName, callback, scope) {
    var elements = document.querySelectorAll('input[name="' + inputName + '"]');
    for (var i=0; i<elements.length; ++i) {
      var element = elements[i];
      element.addEventListener('change', callback.bind(scope, element.value));
    }
  },
  
  _parseNode : function (container) {
    return typeof container === "string" ? document.querySelector(container) : container;
  },
  
};
