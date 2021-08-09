function Chat(callback) {
  this.posts = [];
  this.run(callback);
}

Chat.prototype.run = function (callback) {
  var r = new XMLHttpRequest();
  r.open("GET", "server/comm_list.php?ts=" + new Date().getTime(), true);
  r.onreadystatechange = function () {
    if (r.readyState != 4 || r.status != 200) {
      return;
    }
    this._parseResponse(r.responseText, callback);
  }.bind(this);
  r.send();
};

Chat.prototype._parseResponse = function (text, callback) {
  this.posts = JSON.parse(text);
  for (var i=0; i<this.posts.length; ++i) {
    this.posts[i].Commentaire = this.posts[i].Commentaire.replace("\r\n", "<br/>").replace("\n", "<br/>");
  }
  callback.call();
};

Chat.prototype.post = function (form, callback) {
  var params = "comm=" + form.comm.value + "&user=" + form.user.value;
  var r = new XMLHttpRequest();  
  r.open("POST", "server/comm_insert.php", true);
  r.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  r.setRequestHeader("Content-length", params.length);
  r.onreadystatechange = function () {
    if (r.readyState != 4 || r.status != 200) {
      return;
    }
    this._parseResponse(r.responseText, callback);
  }.bind(this);
  r.send(params);
}
