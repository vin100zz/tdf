function RankingController(mainController) {
  this.mainController = mainController;
  this.posts = [];
}

RankingController.prototype.render = function () {
  var domContainer = '#ranking ul';
  Dom.reset(domContainer);
  
  var result = this.mainController.scoreCalculator.result;
  
  var sorted = result.sort(function(a, b) {
    return (a.rank < b.rank) ? -1 : (a.rank === b.rank ? 0 : 1);
  });
  
  for (var i=0; i<sorted.length; ++i) {
    var resultJoueur = sorted[i];
    Template.apply(domContainer, 'rank-template', {
      position: resultJoueur.rank,
      nom: resultJoueur.name,
      score: resultJoueur.total
    });
  }
}