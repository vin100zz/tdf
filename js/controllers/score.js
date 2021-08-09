function ScoreController(mainController) {
  this.mainController = mainController;
}

ScoreController.prototype.render = function () {
  var domContainer = '#score-container ul';
  Dom.reset(domContainer);
  
  Template.apply(domContainer, 'header-template');
  
  var result = this.mainController.scoreCalculator.result;
  for (var i=0; i<result.length; ++i) {
    var resultJoueur = result[i];
    Template.apply(domContainer, 'joueur-template', {
      name: resultJoueur.name
    });
    
    var columnId = '#score-container ul li:nth-child(' + (i+2) + ') ';
    
    // pronos
    var pronos = this.mainController.pronos;
    for (var j=0; j<pronos[i].cyclistes.length; ++j) {
      var name = pronos[i].cyclistes[j];
      var cycliste = this.mainController.classementGeneral.dictionary[name];
      Template.apply(columnId + 'ul.pronos', cycliste ? 'cycliste-template' : 'unclassed-cycliste-template', {
        cycliste: name,
        position: cycliste ? cycliste.position : null,
        link: cycliste ? cycliste.link : null,
      });
    }
    
    // ensemble
    var ensemble = resultJoueur.ensemble;
    var items = ['fini', 'top50', 'top25', 'top10'];
    for (var j=0; j<items.length; ++j) {
      Template.apply(columnId + 'ul.ensemble', 'points-template', {
        points: ensemble[items[j]],
        class: ''
      });
    }
    Template.apply(columnId + 'ul.ensemble', 'points-template', {
      points: ensemble.sousTotal,
      class: 'sous-total'
    });
    
    // precision
    var precision = resultJoueur.precision;
    for (var j=0; j<10; ++j) {
      Template.apply(columnId + 'ul.precision', 'points-template', {
        points: precision[j+1],
        class: ''
      });
    }
    Template.apply(columnId + 'ul.precision', 'points-template', {
      points: precision.sousTotal,
      class: 'sous-total'
    });
    
    // bonus
    Template.apply(columnId + 'ul.bonus', 'points-template', {
      points: resultJoueur.bonus,
      class: ''
    });
    
    // total
    Template.apply(columnId + 'ul.total', 'points-template', {
      points: resultJoueur.total,
      class: 'total'
    });
    Template.apply(columnId + 'ul.total', 'points-template', {
      points: resultJoueur.rank === 1 ? '1er' : resultJoueur.rank + 'ème',
      class: ''
    });
  }
};
