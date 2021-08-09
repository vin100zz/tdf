window.requestAnimationFrame(function () {
  window.tdf = new MainController();
});

function MainController() {
  window.setTimeout(function () {
    this._controllerNames = ['Score', 'Chat', 'Ranking'];
    this._createControllers();
    
    this.classementGeneral = new ClassementGeneralGetter(this._init.bind(this));
    this.chat = new Chat(this.chatController.render.bind(this.chatController));
  }.bind(this), 100);
}

MainController.prototype._init = function (names) {
  this.pronos = pronos;
  this.scoreCalculator = new ScoreCalculator(pronos, this.classementGeneral);
  this.scoreController.render();
  this.rankingController.render();
}

MainController.prototype._createControllers = function (names) {
  for (var i=0; i<this._controllerNames.length; ++i) {
    var className = this._controllerNames[i] + 'Controller';
    var attributeName = className.charAt(0).toLowerCase() + className.slice(1);
    this.__proto__[attributeName] = new window[className](this);
  }
};


