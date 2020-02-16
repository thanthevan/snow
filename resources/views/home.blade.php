@extends('master')
@section('content')
<style>

 .dog {
	 position: absolute;
	 right:0;
	 width: 10vmin;
	 height: 10vmin;
	 z-index: 0;
}
 .heart {
	 position: absolute;
	 width: 6%;
	 height: 7%;
	 background-color: #e64356;
	 border-bottom-right-radius: 23%;
	 opacity: 0;
	 animation-fill-mode: both;
}
 @keyframes heart-beat {
	 0% {
		 transform: scale(0.75) rotate(35deg);
		 opacity: 1;
	}
	 5%, 15%, 25% {
		 transform: scale(1) rotate(35deg);
	}
	 10%, 20% {
		 transform: scale(0.75) rotate(35deg);
	}
	 70% {
		 opacity: 1;
	}
	 100% {
		 transform: rotate(35deg) translateY(-10px) translateX(-10px);
		 opacity: 0;
	}
}
 .heart--1 {
	 top: -25%;
	 left: 15%;
	 animation: heart-beat 2s ease-out infinite 1.5s;
}
 .heart--2 {
	 top: -36%;
	 left: 7%;
	 animation: heart-beat 2s ease-out infinite 1s;
}
 .heart--3 {
	 top: -48%;
	 left: 14%;
	 animation: heart-beat 2s ease-out infinite 0.5s;
}
 .heart--4 {
	 top: -53%;
	 left: -3%;
	 animation: heart-beat 2s ease-out infinite;
}
 .heart:before, .heart:after {
	 position: absolute;
	 width: 100%;
	 height: 100%;
	 content: '';
	 border-radius: 50%;
	 background-color: #e64356;
}
 .heart:after {
	 bottom: 0px;
	 left: -53%;
}
 .heart:before {
	 top: -53%;
	 right: 0px;
	 transform: rotate(45deg);
}
 .body {
	 position: absolute;
	 width: 100%;
	 height: 50%;
	 background-color: #f79e38;
	 border-top-right-radius: 17% 40%;
	 border-top-left-radius: 25%;
	 border-bottom-right-radius: 5% 13%;
	 border-bottom-left-radius: 30% 40%;
	 z-index: 3;
}
 .cheast {
	 position: absolute;
	 width: 45%;
	 height: 100%;
	 background-color: #fff;
	 border-top-right-radius: 17% 40%;
	 border-top-left-radius: 25%;
	 border-bottom-right-radius: 40% 40%;
	 border-bottom-left-radius: 40% 40%;
	 z-index: 4;
}
 .cheast:after, .cheast:before {
	 position: absolute;
	 content: '';
	 width: 7%;
	 height: 55%;
	 border-radius: 39%;
	 background-color: #fff;
}
 .cheast:after {
	 top: 36%;
	 left: 3%;
	 transform: rotate(-1deg);
}
 .cheast:before {
	 top: 19%;
	 left: -4%;
}
 .head {
	 position: absolute;
	 width: 100%;
	 height: 100%;
	 z-index: 4;
	 animation: dog-head 1s ease-out infinite;
	 animation-fill-mode: both;
	 animation-direction: alternate;
}
 @keyframes dog-head {
	 to {
		 transform: translateX(-3px) rotate(3deg);
	}
}
 .tail {
	 position: absolute;
	 top: -14%;
	 left: 92%;
	 width: 10%;
	 height: 45%;
	 background-color: #f79e38;
	 border-top-right-radius: 30% 30%;
	 border-top-left-radius: 40% 30%;
	 border-bottom-right-radius: 30% 40%;
	 border-bottom-left-radius: 40% 40%;
	 z-index: 2;
	 transform: rotate(20deg);
	 animation: dog-tail 170ms ease-out infinite;
}
 @keyframes dog-tail {
	 from, to {
		 transform: rotate(10deg);
	}
	 50%, 60% {
		 transform: rotate(70deg) translateX(10px) translateY(2px);
	}
}
 .tail:before {
	 position: absolute;
	 content: '';
	 top: -8%;
	 left: -7%;
	 width: 100%;
	 height: 50%;
	 background-color: #f79e38;
	 border-radius: 50%;
	 animation: dog-tail-before 160ms ease-out infinite;
}
 @keyframes dog-tail-before {
	 from, to {
		 transform: translateX(0);
	}
	 50% {
		 transform: translateX(3px);
	}
}
 .legs {
	 position: absolute;
	 top: 97%;
	 left: 0;
	 width: 100%;
	 height: 30%;
	 z-index: 2;
	 animation: dog-legs 1s ease-out infinite 1.5s;
	 animation-fill-mode: both;
	 animation-direction: alternate;
}
 @keyframes dog-legs {
	 from {
		 transform: translateY(-1px);
	}
	 to {
		 transform: translateY(0px);
	}
}
 .legs__front, .legs__back {
	 width: 10%;
	 height: 100%;
	 background-color: #f79e38;
	 position: absolute;
	 border-bottom-right-radius: 100%;
	 border-bottom-left-radius: 100%;
}
 .legs__front:after, .legs__back:after {
	 content: '';
	 position: absolute;
	 top: 50%;
	 width: 100%;
	 height: 49%;
	 background-color: #fff;
	 border-bottom-right-radius: 100%;
	 border-bottom-left-radius: 100%;
}
 .legs__front--left {
	 left: 38%;
	 transform: rotate(1deg);
}
 .legs__front--right {
	 left: 20%;
	 transform: rotate(-4deg);
}
 .legs__back--left {
	 left: 69%;
	 transform: rotate(-7deg);
}
 .legs__back--right {
	 left: 85%;
	 transform: rotate(2deg);
}
 .face {
	 height: 40%;
	 width: 42%;
	 position: absolute;
	 top: -13%;
	 left: -3%;
	 background-color: #fff;
	 border-top-right-radius: 45% 50%;
	 border-top-left-radius: 35% 50%;
	 border-bottom-left-radius: 35% 21%;
	 z-index: 6;
}
 .face:after, .face:before {
	 content: '';
	 position: absolute;
	 background-color: #f79e38;
}
 .face:after {
	 width: 27%;
	 left: 7%;
	 height: 23%;
	 border-top-right-radius: 100% 100%;
	 border-bottom-left-radius: 49% 100%;
	 transform: rotate(-64deg);
	 top: -1%;
	 border-top-left-radius: 0% -20%;
	 border-bottom-right-radius: 52% 0%;
	 box-shadow: rgba(0, 0, 0, 0.1) 2px -6px 11px 1px;
}
 .face:before {
	 width: 55%;
	 left: 42%;
	 top: 0%;
	 height: 35%;
	 border-radius: 23% 7% 16% 12%;
	 transform: rotate(0deg) scaleX(-1);
}
 .eye {
	 width: 6%;
	 height: 6%;
	 position: absolute;
	 border-radius: 100%;
	 top: 24%;
	 background-color: #000;
	 z-index: 6;
	 animation: dog-eye 1800ms infinite;
}
 @keyframes dog-eye {
	 from, to {
		 animation-timing-function: step-end;
		 opacity: 1;
	}
	 50%, 55% {
		 animation-timing-function: step-start;
		 opacity: 0;
	}
}
 .eye--left {
	 left: 27%;
}
 .eye--right {
	 left: 46%;
}
 .mouth {
	 background-color: transparent;
	 border-color: #000;
	 width: 44%;
	 border-style: solid;
	 border-width: 0.7vmin;
	 height: 48%;
	 z-index: 6;
	 position: absolute;
	 bottom: 35%;
	 left: 14%;
	 border-top-color: transparent;
	 border-bottom-left-radius: 72% 100%;
	 border-bottom-right-radius: 77% 100%;
	 border-right-color: transparent;
	 border-top-right-radius: 50%;
	 border-left-color: transparent;
	 transform: rotate(-41deg);
}
 .year {
	 position: absolute;
}
 .year--left {
	 top: -40%;
	 left: 3%;
	 height: 47%;
	 width: 19%;
	 z-index: 1;
	 background-color: #e99036;
	 border-top-left-radius: 68% 100%;
	 border-top-right-radius: 100% 100%;
	 transform-origin: bottom center;
	 animation: left-year 1000ms ease-out infinite;
	 animation-fill-mode: both;
	 animation-direction: alternate;
}
 @keyframes left-year {
	 from {
		 transform: rotate(-26deg);
	}
	 25% {
		 transform: rotate(-35deg);
	}
	 50% {
		 transform: rotate(-26deg);
	}
	 to {
		 transform: rotate(-40deg);
	}
}
 .year--right {
	 top: -39%;
	 left: 19%;
	 height: 38%;
	 width: 18%;
	 z-index: 1;
	 background-color: #f79e38;
	 border-top-left-radius: 56% 100%;
	 border-top-right-radius: 100% 100%;
	 transform-origin: bottom center;
	 border-bottom-right-radius: 14% 38%;
	 animation: right-year 1000ms ease-out infinite;
	 animation-fill-mode: both;
	 animation-direction: alternate;
}
 @keyframes right-year {
	 from {
		 transform: rotate(-331deg);
	}
	 25% {
		 transform: rotate(-320deg);
	}
	 50% {
		 transform: rotate(-331deg);
	}
	 to {
		 transform: rotate(-320deg);
	}
}
 .nose {
	 position: absolute;
	 width: 24%;
	 height: 24%;
	 background-color: #fff;
	 z-index: 7;
	 left: -12%;
	 top: -3%;
	 border-bottom-left-radius: 50% 88%;
	 border-top-left-radius: 11% 43%;
	 transform: rotate(12deg);
}
 .nose:after {
	 content: '';
	 position: absolute;
	 width: 50%;
	 height: 55%;
	 background-color: #000;
	 border-radius: 100%;
	 left: -7%;
	 top: -18%;
}
 

</style>


<div class="alert alert-soft-warning d-flex align-items-center card-margin" role="alert">
    <i class="material-icons mr-3">error_outline</i>
    <div class="text-body">
        Trang này chỉ dành riêng cho cọp con (Bé Nuê). Nghiêm cấm mọi hình thức clone cũng như mược acc :v :v
        ( <i class="fa fa-heart"></i> yêu em , cọp con của anh )
        <div class="dog">
            <div class="heart heart--1"></div>
            <div class="heart heart--2"></div>
            <div class="heart heart--3"></div>
            <div class="heart heart--4"></div>
            <div class="head">
                    <div class="year year--left"></div>
                    <div class="year year--right"></div>
                    <div class="nose"></div>	
                <div class="face">
                    <div class="eye eye--left"></div>
                    <div class="eye eye--right"></div>
                    <div class="mouth"></div>
                </div>
            </div>
            <div class="body">
                <div class="cheast"></div>
                <div class="back"></div>
                <div class="legs">
                    <div class="legs__front legs__front--left"></div>
                    <div class="legs__front legs__front--right"></div>
                    <div class="legs__back legs__back--left"></div>
                    <div class="legs__back legs__back--right"></div>
                </div>
                <div class="tail"></div>
            </div>
        </div>
    </div>

</div>
<div class="row">

    <div class="col-md-3">
        <div class="card card__course">
            <div class="card-header card-header-large card-header-dark bg-dark d-flex justify-content-center">
                <a class="card-header__title  justify-content-center align-self-center d-flex flex-column" href="#">
                    <span class="course__title">Bé hiểu anh Văn dư nào</span>
                    <span class="course__subtitle">Trả lời nhóe :v</span>
                </a>
            </div>
            <div class="p-3">
                <div class="mb-2">
                    <span class="mr-2">
                        <a href="#" class="rating-link active"><i class="material-icons icon-16pt">star</i></a>
                        <a href="#" class="rating-link active"><i class="material-icons icon-16pt">star</i></a>
                        <a href="#" class="rating-link active"><i class="material-icons icon-16pt">star</i></a>
                        <a href="#" class="rating-link active"><i class="material-icons icon-16pt">star</i></a>
                        <a href="#" class="rating-link active"><i class="material-icons icon-16pt">star</i></a>
                    </span>
                    <strong>0/10</strong><br>
                </div>
                <div class="d-flex align-items-center">
                    <a href="#" class="btn btn-primary ml-auto">Trả lời</a>
                </div>
            </div>
        </div>
    </div>



</div>
@endsection