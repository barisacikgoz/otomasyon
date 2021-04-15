{{--@extends('admin.layouts.master')--}}

{{--@section('content')--}}
{{--    <div class="content-wrapper">--}}
{{--        <div class="content-header">--}}
{{--                <div class="row mb-2">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-body">--}}
{{--                            <div class="container-fluid my-5 d-flex justify-content-center">--}}
{{--                                <div class="card card-1">--}}
{{--                                    <div class="card-header bg-white">--}}
{{--                                        <div class="media flex-sm-row flex-column-reverse justify-content-between ">--}}
{{--                                            <div class="col my-auto">--}}
{{--                                                <h4 class="mb-0">Thanks for your Order,<span class="change-color">Anjali</span> !</h4>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-auto text-center my-auto pl-0 pt-sm-4">--}}
{{--                                                <p class="mb-4 pt-0 Glasses"></p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="card-body">--}}
{{--                                        <div class="row justify-content-between mb-3">--}}
{{--                                            <div class="col-auto">--}}
{{--                                                <h6 class="color-1 mb-0 change-color">Receipt</h6>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-auto "> <small>Receipt Voucher : 1KAU9-84UIL</small> </div>--}}
{{--                                        </div>--}}
{{--                                        @foreach($data as $item)--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col">--}}
{{--                                                <div class="card card-2">--}}
{{--                                                    <div class="card-body">--}}
{{--                                                        <div class="media">--}}
{{--                                                            <div class="sq align-self-center "> <img class="img-fluid my-auto align-self-center mr-2 mr-md-4 pl-0 p-0 m-0" src="https://i.imgur.com/RJOW4BL.jpg" width="135" height="135" /> </div>--}}
{{--                                                            <div class="media-body my-auto text-right">--}}
{{--                                                                <div class="row my-auto flex-column flex-md-row">--}}
{{--                                                                    <div class="col my-auto">--}}
{{--                                                                        <h6 class="mb-0">{{$item->stock_code}}</h6>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="col-auto my-auto"> <small>Golden Rim </small></div>--}}
{{--                                                                    <div class="col my-auto"> <small>Size : M</small></div>--}}
{{--                                                                    <div class="col my-auto"> <small>Amount : {{ $item->amount }}</small></div>--}}
{{--                                                                    <div class="col my-auto">--}}
{{--                                                                        <h6 class="mb-0">${{$item->total_price}}.00</h6>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        @endforeach--}}
{{--                                        <div class="row mt-4">--}}
{{--                                            <div class="col">--}}
{{--                                                <div class="row justify-content-between">--}}
{{--                                                    <div class="col-auto">--}}
{{--                                                        <p class="mb-1 text-dark"><b>Order Details</b></p>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="flex-sm-col text-right col">--}}
{{--                                                        <p class="mb-1"><b>Total</b></p>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="flex-sm-col col-auto">--}}
{{--                                                        <p class="mb-1">${{ $all_price }}</p>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="row justify-content-between">--}}
{{--                                                    <div class="flex-sm-col text-right col">--}}
{{--                                                        <p class="mb-1"> <b>Discount</b></p>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="flex-sm-col col-auto">--}}
{{--                                                        <p class="mb-1">&#8377;150</p>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="row justify-content-between">--}}
{{--                                                    <div class="flex-sm-col text-right col">--}}
{{--                                                        <p class="mb-1"><b>GST 18%</b></p>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="flex-sm-col col-auto">--}}
{{--                                                        <p class="mb-1">843</p>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="row justify-content-between">--}}
{{--                                                    <div class="flex-sm-col text-right col">--}}
{{--                                                        <p class="mb-1"><b>Delivery Charges</b></p>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="flex-sm-col col-auto">--}}
{{--                                                        <p class="mb-1">Free</p>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="row invoice ">--}}
{{--                                            <div class="col">--}}
{{--                                                <p class="mb-1 mt-1"> Invoice Number : {{$item->stock_code}}</p>--}}
{{--                                                <p class="mb-1">Invoice Date : {{$item->created_at}}</p>--}}
{{--                                                <p class="mb-1">Recepits Voucher:18KU-62IIK</p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="card-footer">--}}
{{--                                        <div class="jumbotron-fluid">--}}
{{--                                            <div class="row justify-content-between ">--}}
{{--                                                <div class="col-sm-auto col-auto my-auto"></div>--}}
{{--                                                <div class="col-auto my-auto ">--}}
{{--                                                    <h2 class="mb-0 font-weight-bold">TOTAL PAID</h2>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-auto my-auto ml-auto">--}}
{{--                                                    <h1 class="display-3 ">$ {{ $all_price }}</h1>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    <style>--}}
{{--        body {--}}
{{--            min-height: 100vh;--}}
{{--            background-size: cover;--}}
{{--            font-family: 'Lato', sans-serif;--}}
{{--            color: rgba(116, 116, 116, 0.667);--}}
{{--            background: linear-gradient(140deg, #fff, 50%, #BA68C8)--}}
{{--        }--}}

{{--        .container-fluid {--}}
{{--            margin-top: 200px--}}
{{--        }--}}

{{--        p {--}}
{{--            font-size: 14px;--}}
{{--            margin-bottom: 7px--}}
{{--        }--}}

{{--        .small {--}}
{{--            letter-spacing: 0.5px !important--}}
{{--        }--}}

{{--        .card-1 {--}}
{{--            box-shadow: 2px 2px 10px 0px rgb(190, 108, 170)--}}
{{--        }--}}

{{--        hr {--}}
{{--            background-color: rgba(248, 248, 248, 0.667)--}}
{{--        }--}}

{{--        .bold {--}}
{{--            font-weight: 500--}}
{{--        }--}}

{{--        .change-color {--}}
{{--            color: #0F192A !important--}}
{{--        }--}}

{{--        .card-2 {--}}
{{--            box-shadow: 1px 1px 3px 0px rgb(112, 115, 139)--}}
{{--        }--}}

{{--        .fa-circle.active {--}}
{{--            font-size: 8px;--}}
{{--            color: #0F192A--}}
{{--        }--}}

{{--        .fa-circle {--}}
{{--            font-size: 8px;--}}
{{--            color: #aaa--}}
{{--        }--}}

{{--        .rounded {--}}
{{--            border-radius: 2.25rem !important--}}
{{--        }--}}

{{--        .progress-bar {--}}
{{--            background-color: #0F192A !important--}}
{{--        }--}}

{{--        .progress {--}}
{{--            height: 5px !important;--}}
{{--            margin-bottom: 0--}}
{{--        }--}}

{{--        .invoice {--}}
{{--            position: relative;--}}
{{--            top: -70px--}}
{{--        }--}}

{{--        .Glasses {--}}
{{--            position: relative;--}}
{{--            top: -12px !important--}}
{{--        }--}}

{{--        .card-footer {--}}
{{--            background-color: #0F192A;--}}
{{--            color: #fff--}}
{{--        }--}}

{{--        h2 {--}}
{{--            color: #fff;--}}
{{--            letter-spacing: 2px !important--}}
{{--        }--}}

{{--        .display-3 {--}}
{{--            font-weight: 500 !important--}}
{{--        }--}}

{{--        @media (max-width: 479px) {--}}
{{--            .invoice {--}}
{{--                position: relative;--}}
{{--                top: 7px--}}
{{--            }--}}

{{--            .border-line {--}}
{{--                border-right: 0px solid rgb(226, 206, 226) !important--}}
{{--            }--}}
{{--        }--}}

{{--        @media (max-width: 700px) {--}}
{{--            h2 {--}}
{{--                color: #fff;--}}
{{--                font-size: 17px--}}
{{--            }--}}

{{--            .display-3 {--}}
{{--                font-size: 28px;--}}
{{--                font-weight: 500 !important--}}
{{--            }--}}
{{--        }--}}

{{--        .card-footer small {--}}
{{--            letter-spacing: 7px !important;--}}
{{--            font-size: 12px--}}
{{--        }--}}

{{--        .border-line {--}}
{{--            border-right: 1px solid rgb(226, 50, 50)--}}
{{--        }--}}
{{--    </style>--}}
{{--@endsection--}}
