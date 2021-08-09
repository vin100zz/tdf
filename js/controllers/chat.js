function ChatController(mainController) {
  this.mainController = mainController;
  this.posts = [];
}

ChatController.prototype.render = function () {
  document.querySelector('#chat form').reset();
  
  var domContainer = '#chat-posts ul';
  Dom.reset(domContainer);
  
  var posts = this.mainController.chat.posts;
  for (var i=0; i<posts.length; ++i) {
    var post = posts[i];
    Template.apply(domContainer, 'chat-post-template', {
      datetime: post.Datetime.substr(0, 16),
      nom: post.Nom,
      commentaire: post.Commentaire
    });
  }
  
  document.querySelector('#chat form').addEventListener('submit', function(evt) {
    this.mainController.chat.post(evt.target, this.render.bind(this));
  }.bind(this));
}


