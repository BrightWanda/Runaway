@extends('layouts.admin')

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Forms</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-4 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Runaway Calculator
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-11">
                                <form id="calcForm" action="{{url('calc')}}" method="post">
                                    {!! csrf_field() !!}
                                    <div class="form-group">
                                        <label>Lump Sum Amount</label>
                                        <input type="number" step="0.01" required="true" class="form-control" name="lumpSum" id="lumpSum">
                                    </div>
                                    <div class="form-group">
                                        <label>Choose One</label>
                                        <label class="radio-inline">
                                            <input type="radio" name="valOption" id="selectAmount" value="Amount" checked>Amount
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="valOption" id="selectPercent" value="Percentage">Percentage
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label id="textValue">Annual Return Amount</label>
                                        <input type="number" step="0.01" required="true" class="form-control" name="annualAmount" id="annualAmount" placeholder="Amount should be between 2.5%-17.5% of lump sum amount">
                                    </div>
                                    <div class="form-group">
                                        <label>Minimum Investment Level</label>
                                        <input type="number" step="0.01" required="true" class="form-control" name="minInvestLevel" id="minInvestLevel">
                                    </div>
                                    <div class="form-group">
                                        <label>Expected Market Return (%)</label>
                                        <input type="number" step="0.01" required="true" class="form-control" name="exptectedMarketReturn" id="exptectedMarketReturn">
                                    </div>
                                    <button type="submit" id="submit" class="btn btn-success">Submit</button>
                                </form>
                            </div>                            
                        </div>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        
        @if (session('status-results'))
            <div class="row">
                <div class="col-lg-3 col-md-offset-2">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Outcome
                        </div>
                        <div class="panel-body">
                            <p> Number of months you can expect to get income is: {{ session('status-results') }} months</p>
                        </div>
                        <div class="panel-footer">

                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        @endif                
    </div>
    <!-- /#page-wrapper -->
@endsection