function ScoreCalculator(pronos, classementGeneral) {
  this._pronos = pronos;
  this._classementGeneral = classementGeneral;
  this.result = [];
  this.run();
}

ScoreCalculator.prototype.run = function () {
  for (var i=0; i<this._pronos.length; ++i) {
    var pronosJoueur = this._pronos[i];
    var score = {
      name: pronosJoueur.name,
      ensemble: this._calculateEnsemble(pronosJoueur.cyclistes),
      precision: this._calculatePrecision(pronosJoueur.cyclistes),
      bonus: this._calculateBonus(pronosJoueur.cyclistes)
    };
    score.total = score.ensemble.sousTotal + score.precision.sousTotal + score.bonus;
    this.result.push(score);
  }
  this._calculateRank();
};

ScoreCalculator.prototype._calculateEnsemble = function (cyclistes) {
  var items = [
    {key: 'fini', max: Infinity},
    {key: 'top50', max: 50},
    {key: 'top25', max: 25},
    {key: 'top10', max: 10}
  ];
  var points = {
    sousTotal: 0
  };
  for (var i=0; i<items.length; ++i) {
    var item = items[i];
    var pt = 0;
    for (var j=0; j<cyclistes.length; ++j) {
      var cycliste = cyclistes[j];
      if (this._classementGeneral.dictionary[cycliste]) {
        var real = this._classementGeneral.dictionary[cycliste].position;
        if (real <= item.max) {
          ++pt;
        }
      }
    }
    points[item.key] = pt;
    points.sousTotal += 10*pt;
  }  
  return points;
}

ScoreCalculator.prototype._calculatePrecision = function (cyclistes) {
  var points = {
    sousTotal: 0
  };
  for (var i=0; i<cyclistes.length; ++i) {
    var cycliste = cyclistes[i];
    var pt = 0;
    if (this._classementGeneral.dictionary[cycliste]) {
      var predicted = i+1;
      var real = this._classementGeneral.dictionary[cycliste].position;
      if (real <= 10) {
        pt = Rules.precision[predicted-1][real-1];
      }
    }
    points[i+1] = pt;
    points.sousTotal += 5*pt;
  }  
  return points;
}

ScoreCalculator.prototype._calculateBonus = function (cyclistes) {
  var pt = 0;
  
  var isWellPositioned = function (pos) {
    var cycliste = cyclistes[pos-1];
    if (this._classementGeneral.dictionary[cycliste]) {
      var real = this._classementGeneral.dictionary[cycliste].position;
      if (real === pos) {
        return true;
      }
    }
    return false;
  }.bind(this);
  
  if (isWellPositioned(1)) {
    pt += 20;
    if (isWellPositioned(2)) {
      pt += 30;
      if (isWellPositioned(3)) {
        pt += 50;
      }
    }
  }
  return pt;
}

ScoreCalculator.prototype._calculateRank = function () {
  for (var i=0; i<this.result.length; ++i) {
    var resultJoueur = this.result[i];
    var total = resultJoueur.total;
    resultJoueur.rank = 1;
    for (var j=0; j<this.result.length; ++j) {
      if (this.result[j].total > total) {
        ++resultJoueur.rank;
      }
    }
  }
}
