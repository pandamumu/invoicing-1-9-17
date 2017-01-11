<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
</head>

@section ('content')
<body>
@include('includes.header')
<div id="page-wrapper">
    <header id="pageheader">
        <div class="header-wrapper">
            <div class="header-top">
                <a href="#" class="btn btn-primary toggle-back">manage invoices</a>
                <h1>New Invoice</h1>
                <div class="action-holder">

                    <a href="#" class="btn btn-primary">preview</a>
                    <a href="#" class="btn btn-secondary">send</a>


                </div>


            </div>
        </div>
    </header>

    <section id="pagecontent">
        <div class="content-wrapper">
            <div class="content">
                <div class="invoice-wrapper">
                    <div class="form-holder">
                        <div class="form-block">
                            <div class="row">
                                <div class="col-md-8 col-lg-9">
                                    <div class="field-holder invoice-field">
                                        <label>Invoice No.</label>
                                        <div class="field">
                                            <input type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-3">
                                    <div class="field-holder">
                                        <label>Client</label>
                                        <select class="clientchoose">
                                            @foreach($companies as $company)
                                                <option value="{!! $company -> id_company !!}"> {!! $company -> company !!}</option>
                                            @endforeach
                                        </select>
                                        <label>Currency</label>
                                        <select>
                                            @foreach($companies as $company)
                                                <option value="{!! $company -> id_company !!}"> {!! $company -> currency !!}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-block">
                            <div class="row">
                                <div class="col-md-8 col-lg-9">
                                    <div class="field-holder">
                                        <label>From</label>
                                        <textarea>
Juice Factory
20 Swallow Street
London, United Kingdom
                                            </textarea>
                                    </div>
                                    <div class="field-holder">
                                        <label>To</label>
                                        <textarea>
Paul McBilling
80 Mortimer Street
London W1W 7FE
                                            </textarea>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-3">
                                    <div class="field-holder">
                                        <label>Date</label>
                                        <input type="date">
                                    </div>
                                    <div class="field-holder">
                                        <label>Invoice Due</label>
                                        <select>
                                            <option value="1">Due on Receipt</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-block">
                            <div class="custom-table">
                                <div class="table-head">
                                    <div class="table-row">
                                        <div class="description">
                                            Description
                                        </div>
                                        <div class="hour">
                                            Hour
                                        </div>
                                        <div class="rate">
                                            Rate
                                        </div>
                                        <div class="amount">
                                            Amount
                                        </div>
                                        <div class="remove"></div>
                                    </div>
                                </div>
                                <div class="table-content">
                                    <div class="table-row">
                                        <div class="description">
                                            <input type="text">
                                        </div>
                                        <div class="hour">
                                            <input type="text">
                                        </div>
                                        <div class="rate">
                                            <input type="text">
                                        </div>
                                        <div class="amount">
                                            <input type="text">
                                        </div>
                                        <div class="remove">
                                            <a href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-block">
                        <div class="row">
                            <div class="col-md-6"></div>
                            <div class="col-md-6">
                                <div class="summary-holder">
                                    <ul>
                                        <li>
                                            Sub Total
                                            <span>45.00</span>
                                        </li>

                                        <li>
                                            <strong>TOTAL(EUR)</strong>
                                            <span><strong>38.25</strong></span>
                                        </li>
                                    </ul>
                                    <div class="total-holder">
                                        <div class="total">
                                            EUR
                                            <span>38.25</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
<script src="source/js/jquery.min.js"></script>
<script src="source/js/main.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {

        $(document).on('change','.client-selection',function () {
            console.log("hmm its change");

            var cli_id=$(this).val();
            console.log(cli_id);
        });
    });
</script>
</body>

</html>
