function ClassementGeneralGetter(callback) {
  this.positions = [];
  this.dictionary = [];
  this.run(callback);
}

ClassementGeneralGetter.prototype.run = function (callback) {
  var r = new XMLHttpRequest();
  r.open("GET", "server/tdf.php?ts=" + new Date().getTime(), true);
  r.onreadystatechange = function () {
    if (r.readyState != 4 || r.status != 200) {
      return;
    }
    this._parseResponse(r.responseText, callback);
  }.bind(this);
  r.send();
};

ClassementGeneralGetter.prototype._parseResponse = function (text, callback) {
  this.positions = JSON.parse(text);
  for (var i=0; i<this.positions.length; ++i) {
    var cycliste = this.positions[i];
    this.dictionary[cycliste.name] = cycliste;
  }
  callback.call();
}
