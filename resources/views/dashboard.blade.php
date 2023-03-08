@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
  <div class="card">
    <h1>Dashboard</h1>
  </div> 

  <div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-primary">
          <i class="fas fa-user"></i>
        </div>

        <div class="card-wrap">
            <div class="card-header">
              Total User
            </div>

            <div class="card-body">
              {{ $user->count() }}
            </div>
          </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-danger">
          <i class="fas fa-cash-register"></i>
        </div>

        <div class="card-wrap">
            <div class="card-header">
              Total Transaksi
            </div>

            <div class="card-body">
              {{ $transaksi->count(); }}
            </div>
          </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-warning">
          <i class="fas fa-scroll"></i>
        </div>

        <div class="card-wrap">
            <div class="card-header">
              Total Laporan
            </div>

            <div class="card-body">
              {{ $detailtransaksi->count(); }}
            </div>
          </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-success">
          <i class="fas fa-box-open"></i>
        </div>

        <div class="card-wrap">
            <div class="card-header">
              Total Paket
            </div>

            <div class="card-body">
              {{ $paket->count(); }}
            </div>
          </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-primary">
          <i class="fas fa-user"></i>
        </div>

        <div class="card-wrap">
            <div class="card-header">
              Total Member
            </div>

            <div class="card-body">
              {{ $member->count(); }}
            </div>
          </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-danger">
          <i class="fas fa-store"></i>
        </div>

        <div class="card-wrap">
            <div class="card-header">
              Total Outlet
            </div>

            <div class="card-body">
              {{ $outlet->count(); }}
            </div>
          </div>
      </div>
    </div>
  </div>

  <!-- grafik pesanan -->

  <div class="row">
            <div class="col-lg-8">
              <div class="card">
                <div class="card-header">
                  <h4>Grafik</h4>
                </div>
                <div class="card-body"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                  <canvas id="myChart" height="220" style="display: block; width: 419px; height: 220px;" width="419" class="chartjs-render-monitor"></canvas>
                </div>
              </div>
            </div>
          </div>
@endsection