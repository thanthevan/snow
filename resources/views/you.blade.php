@extends('master')
@section('content')
<style>

.containerz {
	width: 100%;
	display: flex;
	justify-content: center;
	align-items: center;
}
.dog {
	width: 160px;
	height: 186px;
	position: relative;
}
@keyframes head {
	0% {
		transform: rotate(0deg);
	}
	30% {
		transform: rotate(0deg);
	}
	40% {
		transform: rotate(-20deg);
	}
	80% {
		transform: rotate(-20deg);
	}
	90% {
		transform: rotate(0deg);
	}
	100% {
		transform: rotate(0deg);
	}
}
.dog-head {
	width: 100px;
  height: 90px;
  position: absolute;
	z-index: 5;
  top: 30px;
  left: calc(50% - 50px);
  background-color: #efc092;
  border-radius: 50%;
	animation: head 6s linear infinite;
}
.dog-head:before,
.dog-head:after {
  content: "";
  width: 79px;
  height: 50px;
  position: absolute;
  z-index: 5;
  top: 44px;
  background-color: #efc092;
  border-radius: 50%;
}
.dog-head:before {
  left: -7px;
  transform: rotate(50deg);
}
.dog-head:after {
  right: -7px;
  transform: rotate(-49deg);
}
.dog-mouth {
	width: 60px;
  height: 35px;
  background-color: #fee2d2;
  position: absolute;
  bottom: -15px;
  left: 20px;
  z-index: 10;
  border-radius: 50%;
}
.dog-mouth:after {
	content: "";
	width: 10px;
  height: 40px;
  background-color: #fee2d2;
  position: absolute;
  bottom: 30px;
  left: 24px;
  z-index: 10;
  border-radius: 20px;
}
.dog-nose {
	width: 16px;
	height: 10px;
	position: absolute;
	top: 8px;
	left: calc(50% - 8px);
	background-color: #000;
	border-radius: 50%;
}
@keyframes tongue {
	0% {
		height: 10px;
	}
	30% {
		height: 10px;
	}
	40% {
		height: 20px;
	}
	60% {
		height: 10px;
	}
	80% {
		height: 20px;
	}
	90% {
		height: 10px;
	}
	100% {
		height: 10px;
	}
}
.dog-tongue {
  width: 20px;
  height: 10px;
  position: absolute;
  top: 24px;
  left: calc(50% - 10px);
  background-color: #f4a4ad;
  border-radius: 0 0 10px 10px;
	animation: tongue 4s linear infinite;
}
.dog-eyes {
	width: 10px;
  height: 16px;
  background-color: #000;
  position: absolute;
  top: 52px;
  left: 28px;
  border-radius: 50%;
  z-index: 10;
  box-shadow: 33px 0px 0px #000;
}
.dog-eyes:after {
  content: "";
  width: 92px;
  height: 50px;
  position: absolute;
  top: -50px;
  left: -24px;
  background-color: #efc092;
  border-radius: 50%;
}
.dog-ears {
  width: 80px;
	height: 50px;
	position: absolute;
	z-index: 0;
	top: -2px;
	border-radius: 150px 0 150px 0;
	background-color: #efc092;
}
.dog-ears:after {
	content: "";
  width: 50px;
	height: 30px;
	position: absolute;
	z-index: 0;
	top: 8px;
	left: 20px;
	border-radius: 150px 0 150px 0;
	transform: rotate(-176deg);
	background-color: #fee2d2;
}
.ears-left {
	left: -22px;
	transform: rotate(-105deg);
}
.ears-right {
	right: -22px;
	transform: rotate(-22deg);
}
.dog-body {
  width: 54px;
  height: 60px;
  position: absolute;
  top: 120px;
  left: calc(50% - 35px);
  background-color: #d58b4e;
  border-radius: 49px 0 0 20px;
}
.dog-body:before {
  content: "";
  width: 50px;
  height: 60px;
  position: absolute;
  top: 3px;
  left: calc(50% - 17px);
  background-color: #efbf8e;
  border-radius: 100px 100px 0 0;
}
.dog-body:after {
  content: "";
  width: 15px;
  height: 30px;
  position: absolute;
  top: 32px;
  left: 28px;
  background-color: #d58b4e;
  border-radius: 100px 100px 0 0;
}
.dog-foot {
	width: 20px;
  height: 13px;
  position: absolute;
  z-index: 5;
  bottom: -3px;
  left: 8px;
  background-color: #fce2d3;
  border-radius: 10px 10px 0 0;
	box-shadow: 33px 0 0 #fce2d3;
}
@keyframes tail {
	0% {
  	transform: rotate(-47deg);
	}
	100% {
  	transform: rotate(-57deg);
	}
}
.dog-tail {
	width: 10px;
  height: 50px;
  position: absolute;
  top: 120px;
  left: calc(50% - 45px);
  background-color: #ecc093;
  transform: rotate(-47deg);
  border-radius: 10px 0 0 0px / 50px 0 0 0px;
	animation: tail .08s infinite alternate;
}
.ball {
	width: 30px;
	height: 30px;
	position: absolute;
	bottom: 0;
	right: 0px;
	border-radius: 50%;
	background-color: #6E64F0;
}
</style>
<div class="row">
    <div class="col-md-3">
        <a href="{{ route('create') }}" class="btn btn-success mb-3 btn-block">Tạo mới nè <i class="material-icons">add_circle_outline</i></a>
        <ul class="list-group">
            <li class="list-group-item active"><a href="#" class="text-white">Câu hỏi của bé</a></li>
            <li class="list-group-item"><a href="#">Anh hiểu cọp con dư nào</a></li>
        </ul>
        <div class="containerz">
            <div class="dog">
                <div class="dog-head">
                    <div class="dog-ears ears-left"></div>
                    <div class="dog-ears ears-right"></div>
                    <div class="dog-eyes"></div>
                    <div class="dog-mouth">
                        <div class="dog-nose"></div>
                        <div class="dog-tongue"></div>
                    </div>
                </div>
                <div class="dog-tail"></div>
                <div class="dog-body">
                    <div class="dog-foot"></div>
                </div>
                <div class="ball"></div>
            </div>
        </div>
    </div>
    <div class="col-md-9">

        <div class="stories-cards mb-4">


            <div class="card">
                <div class="d-flex align-items-center flex-wrap">
                    <div class="m-3">
                        <a href="#" class="d-flex align-items-center avatar text-muted">
                            <!-- LOGO -->
                            <svg width="50px" viewBox="0 0 27 26" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
                                    <path d="M21.9257604,14.9506975 C20.582703,15.0217165 19.3145795,14.3502722 18.6558508,13.2193504 C18.5961377,13.1299507 18.488013,13.0821416 18.3788008,13.0968482 C18.2695887,13.1115549 18.1791809,13.1860986 18.1471473,13.287853 L16.3403333,18.8266167 C16.0783106,19.5012544 15.4036423,19.9432488 14.6567374,19.9295884 C13.9098324,19.915928 13.2530282,19.4495818 13.0177202,18.7658483 L10.3561926,9.20532122 C10.3224612,9.0828362 10.2066255,8.99820016 10.075223,9.00002907 C9.94382048,9.00185799 9.83056595,9.0896826 9.8005142,9.21305538 C9.53809432,10.6490488 9.07561673,12.0442508 8.42563983,13.3607751 C7.81040896,14.4321066 6.59978897,15.0547797 5.33446397,14.9506975 L0.286383595,14.9506975 C0.200836429,14.9508269 0.119789989,14.987678 0.0652579686,15.0512416 C0.0105052402,15.1148427 -0.011403821,15.1989481 0.00568007946,15.2799517 C1.26517458,21.5063521 6.92177656,26 13.500072,26 C20.0783674,26 25.7349694,21.5063521 26.9944639,15.2799517 C27.0112295,15.1987308 26.9894777,15.1145345 26.935158,15.050392 C26.8808383,14.9862496 26.7996356,14.9488738 26.7137603,14.9484877 C23.5217604,14.9499609 21.9257604,14.9506975 21.9257604,14.9506975 Z" opacity="0.539999962"></path>
                                    <path d="M5.48262697,13.1162874 C6.53570764,13.1162874 6.62233928,13.1162874 7.63604194,9.25361392 C7.86780969,8.37139838 8.14008055,7.33311522 8.48548201,6.11058557 C8.7087856,5.42413873 9.37946641,4.96506482 10.1258577,4.98776578 C10.8742462,4.96784002 11.5440567,5.43246093 11.761733,6.1225074 L14.4619398,15.7986995 C14.4940991,15.9151627 14.6022445,15.9971672 14.7273152,15.9999282 C14.8523859,16.0026893 14.9643174,15.9255432 15.0019812,15.8106214 L16.5152221,11.1654422 C16.7421482,10.5403405 17.3447552,10.1140124 18.0318383,10.0924774 C18.6964712,10.0434044 19.3301356,10.3708193 19.6553377,10.9313408 C19.7678463,11.1405147 19.8803549,11.3453535 19.9759873,11.5426056 C20.6296623,12.8128226 20.8198019,13.1119522 21.7761252,13.1119522 L26.7186288,13.1119522 C26.7943575,13.1119652 26.8669186,13.0826781 26.9200192,13.030667 C26.9730799,12.97881 27.0019231,12.9083695 26.9999003,12.8355824 C26.9032945,5.71885474 20.8862135,-0.00118613704 13.4977698,1.84496545e-07 C6.10932623,0.00118650603 0.0942250201,5.72315932 8.19668591e-05,12.8399177 C-0.00175692205,12.9131783 0.0274115935,12.9840093 0.080884445,13.0361333 C0.134357296,13.0882573 0.207535985,13.1171917 0.283603687,13.1162874 L5.48262697,13.1162874 Z"></path>
                                </g>
                            </svg>

                        </a>
                    </div>
                    <div class="stories-card__title flex">
                        <h5 class="card-title m-0"><a href="#" class="text-body">How can I use props in Vue.js?</a></h5>
                        <small class="text-muted"><a href="#"><strong>Adrian</strong></a> replied 5 min ago</small>
                    </div>

                </div>
            </div>

           
        </div>
    </div>
</div>
@endsection