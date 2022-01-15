//ローディング カウントアップ+バー設定
var bar = new ProgressBar.Line(field_text, {            //プログレスバーを呼び出しidを設定
  easing: 'easeInOut',                                   //アニメーション効果 easeInOut:加速してから減速
  duration: 1000,                                        //時間指定 1000:1秒
  strokeWidth: 1.0,                                      //進捗ゲージの太さ
  trailWidth: 1.0,                                       //ゲージベースの線の太さ
  trailColor: '#6fc8c2',                                 //ゲージベースの線のカラー
  text: {                                                //テキストの形状を直接指定       
    style: {            
      position: 'absolute',
      left: '50%',
      top: '50%',
      padding: '0',
      margin: '-30px 0 0 0',                             //バーより上に配置
      transform:'translate(-50%,-50%)','font-size':'1rem',
      color: '#fff',
    },
    autoStyleContainer: false                            //自動付与のスタイルを切る
  },
  step: function(state, bar) {
    bar.setText(Math.round(bar.value() * 100) + ' %');   //テキストの数値
  }
});
//アニメーション設定
bar.animate(1.0, function () {                           //アニメーション設定 1.0:100%
  $("#field").delay(500).fadeOut(800);                   //delay:開始されるまで fadeout:フェードアウト
}); 

//particles.js
particlesJS("particles-js", {"particles":{"number":{"value":80,"density":{"enable":true,"value_area":800}},
"color":{"value":"#6fc8c2"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},
"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},
"opacity":{"value":0.5,"random":false,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},
"size":{"value":3,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},
"line_linked":{"enable":true,"distance":150,"color":"#ffffff","opacity":0.4,"width":1},
"move":{"enable":true,"speed":6,"direction":"none","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},
"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":true,"mode":"repulse"},"onclick":{"enable":true,"mode":"push"},"resize":true},
"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},
"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},
"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},
"retina_detect":true});
var count_particles, stats, update; 
stats = new Stats; stats.setMode(0); stats.domElement.style.position = 'absolute'; 
stats.domElement.style.left = '0px'; stats.domElement.style.top = '0px'; 
document.body.appendChild(stats.domElement); count_particles = document.querySelector('.js-count-particles'); 
update = function() { stats.begin(); stats.end(); 
  if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) 
  { count_particles.innerText = window.pJSDom[0].pJS.particles.array.length; } requestAnimationFrame(update); }; requestAnimationFrame(update);;

