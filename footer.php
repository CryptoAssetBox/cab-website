<section once="" class="cid-qZG3O0QCWv" id="footer7-h">

    

    

    <div class="container">
        <div class="row justify-content-center align-center">
            <div class="col-12 col-md-5" data-aos="fade-up" >
                <img src="assets/images/logo-primary.svg" height="200px" alt="cryptoassetbox" style="margin-top: -100px">
            </div>
        </div>
        <div class="media-container-row align-center mbr-grey">
            <div class="row row-links">
                <ul class="foot-menu" data-aos="fade-down"  data-aos-duration="800">
                    
                    
                    
                    
                    
                <li class="foot-menu-item mbr-fonts-style display-7" >
                        <a class="text-primary mbr-bold" href="#about" target="_blank">About us</a>
                    </li><li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-primary mbr-bold" href="index.php#team" target="_blank">Our Team</a>
                    </li><li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-primary mbr-bold" href="index.php#whitepaper" target="_blank">Whitepaper</a>
                    </li><li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-primary mbr-bold" href="ico.php" target="_blank">ICO</a>
                    </li>
                </ul>
            </div>
            <div class="row social-row">
                <div class="social-list align-right pb-2">
                    
                    
                    
                    
                    
                    
                <div class="soc-item">
                        <a href="https://twitter.com/CryptoAssetBox" target="_blank"   >
                           <img src="assets/images/tw.svg" alt="cryptoassetbox" data-aos="fade-right">
                        </a>
                    </div>
                    <div class="soc-item">
                        <a href="https://t.me/joinchat/G8sVQFMV-hFcH3ddlPIfCg" target="_blank" >
                            <img src="assets/images/te.svg" alt="cryptoassetbox" data-aos="fade-down"  data-aos-duration="1100">
                        </a>
                    </div>
                    <div class="soc-item">
                        <a href="https://discord.gg/AMrw7Gz" target="_blank" >
                            <img src="assets/images/dc.svg" alt="cryptoassetbox" data-aos="fade-down"  data-aos-duration="1300">
                        </a>
                    </div>
                  
                    
                    
                    
                </div>
            </div>
            <div class="row row-copirayt">
                <p class="mbr-text mb-0 mbr-fonts-style mbr-grey align-center display-7 " style="letter-spacing: 1px; opacity: .8; font-size: 1rem;">
                    © Copyright <?php echo date("Y"); ?> CryptoAssetBox.All Rights Reserved. 
                </p>
                <p class="mbr-text mb-0 mbr-fonts-style mbr-grey align-center display-7 " style="letter-spacing: 1px; opacity: .7; font-size: 0.9rem;">
                     Powered by Innovative blockchain solutions Singapore
                </p>
            </div>
        </div>
    </div>
</section>

<?php include'popups.php'  ?>
  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>
  <script src="assets/aos/dist/aos.js"></script>
  <script src="assets/default/js/default.js"></script>
  
  <script src="assets/default/js/echarts.min.js"></script>
       <script>
           var dom = document.getElementById("chart-1");
var myChart = echarts.init(dom);
var app = {};
option = null;
option = {
    backgroundColor: '#fff',
    color: ['#dd6b66','#759aa0','#e69d87','#8dc1a9','#ea7e53','#eedd78','#73a373','#73b9bc','#7289ab', '#91ca8c','#f49f42'],
    title: {
        text: '',
        left: 'center',
        top: 20,
       
    },
    legend: {
        show: true
    },

 visualMap: {
        show: false,
        min: 100,
        max: 850,
        inRange: {
            colorLightness: [0, 1]
        }
    },
    tooltip : {
        show: false,
        trigger: 'item',
        formatter: "{a} <br/>{b} : {c} ({d}%)"
    },


    series : [
        {
            name:'CryptoAssetBox',
            type:'pie',
            radius : '55%',
            center: ['50%', '50%'],
               data:[
                {value:550, name:'Project Development 45%'},
                {value:250, name:'Operations (platform maintenance) 10%'},
                {value:250, name:'Partnerships 10%'},
                {value:350, name:'Marketing and PR 15%'},
                {value:250, name:'Sales and business analytics 10%'},
                {value:250, name:'Administration 10%'},
            ].sort(function (a, b) { return a.value - b.value; }),
            roseType: 'radius',
            label: {
                normal: {
                    textStyle: {
                        color: '#1A1A92'
                    }
                }
            },
            labelLine: {
                normal: {
                    lineStyle: {
                        color: 'rgba(0, 0, 0, 0.2)'
                    },
                    smooth: 0.2,
                    length: 10,
                    length2: 20
                }
            },
            itemStyle: {
                normal: {
                    color: '#1A1A92',
                }
            },

            animationType: 'scale',
            animationEasing: 'elasticOut',
            animationDelay: function (idx) {
                return Math.random() * 200;
            }
        }
    ]
};;
if (option && typeof option === "object") {
    myChart.setOption(option, true);
}


var dom = document.getElementById("chart-2");
var myChart = echarts.init(dom);
var app = {};
option = null;
option = {
    backgroundColor: '#fff',
    color: ['#dd6b66','#759aa0','#e69d87','#8dc1a9','#ea7e53','#eedd78','#73a373','#73b9bc','#7289ab', '#91ca8c','#f49f42'],
    title: {
        text: '',
        left: 'center',
        top: 20,
       
    },
    legend: {
        show: true
    },
 visualMap: {
        show: false,
        min: 0,
        max: 1000,
        inRange: {
            colorLightness: [0, 1]
        }
    },
    tooltip : {
        show: false,
        
        trigger: 'item',
        formatter: "{a} <br/>{b} : {c} ({d}%)"
    },


    series : [
        {
            name:'CryptoAssetBox',
            type:'pie',
            radius : '55%',
            center: ['50%', '50%'],
               data:[
                {value:800, name:'Investor  85%'},
                {value:150, name:'Team  9%'},
                {value:100, name:'Advisor  4%'},
                {value:100, name:'PR, Bounty  2%'},
            ].sort(function (a, b) { return a.value - b.value; }),
            roseType: 'radius',
            label: {
                normal: {
                    textStyle: {
                        color: '#1A1A92'
                    }
                }
            },
            labelLine: {
                normal: {
                    lineStyle: {
                        color: 'rgba(0, 0, 0, 0.2)'
                    },
                    smooth: 0.2,
                    length: 10,
                    length2: 20
                }
            },
            itemStyle: {
                normal: {
                    color: '#1A1A92',
                }
            },

            animationType: 'scale',
            animationEasing: 'elasticOut',
            animationDelay: function (idx) {
                return Math.random() * 200;
            }
        }
    ]
};;
if (option && typeof option === "object") {
    myChart.setOption(option, true);
}
       </script>
       <script>
           function myFunction() {
                var copyText = document.getElementById("myInput");
                  copyText.select();
                  document.execCommand("copy");
                  //alert("Copied the text: " + copyText.value);
            }
       </script>
  <script>
      //document.addEventListener('contextmenu', event => event.preventDefault());

  </script>
  <script>
      AOS.init();
  </script>
</body>
</html>