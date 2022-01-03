

$(function() {

  //okiniクラスをクリックした時に以下の処理が走る
  $("#okini").click(function() {
    //バックのカラーを変える
    $(".okini").toggleClass("okiniPink");
    alert('お気に入りリストに追加しました。');
  });
});
