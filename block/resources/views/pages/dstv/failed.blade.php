@include('layouts.partials.style')
@include('layouts.partials.side-nav')
@include('layouts.partials.top-bar')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Failed Payments</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Transactions</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $trans }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>

    <form action="" method="get">
        <div class="input-group">
            <div class="col-md-2">
                <div class="form-group">
                    <input type="text" name="order_ref" id='ref' class="form-control form-control-user"
                        aria-describedby="emailHelp" placeholder="Enter Reference">
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <input type="text" id='account' name="phone_number" class="form-control form-control-user"
                        aria-describedby="emailHelp" placeholder="Enter account Number">
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <input type="date" id='date_created' name="date_from" class="form-control form-control-user"
                        aria-describedby="emailHelp">
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <input type="date" id='date_updated' name="date_to" class="form-control form-control-user"
                        aria-describedby="emailHelp">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">

                    <a onclick="onSubmitAC()" class="btn btn-primary">
                        Search
                    </a>

                    <a href="{{ asset('dstv/failed-payment') }}" class="btn btn-danger">
                        Reset
                    </a>
                </div>
            </div>
        </div>

    </form>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Failed Payments</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Ref</th>
                            <th>Customer</th>
                            <th>Account</th>
                            <th>Amount</th>
                            <th>Extra Package</th>
                            <th>Extra Amount</th>
                            <th>Total Paid</th>
                            <th>Date Initiated</th>
                            <th>Failed Date </th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($failed as $transactions)
                            <tr>
                                <td>{{ $transactions->order_ref }}</td>
                                <td>{{ $transactions->customer }}</td>
                                <td>{{ $transactions->order_details }}</td>
                                <td>{{$transactions->currency_symbol}} {{$transactions->amount= number_format($transactions->amount, 2)}}</td>
                                <td>{{ 0 }}</td>
                                <td>{{ 0 }}</td>
                                <td>{{$transactions->currency_symbol}} {{$transactions->amount= number_format($transactions->amount, 2)}}</td>
                                <td>{{ $transactions->created_at }}</td>
                                <td>{{ $transactions->updated_at }}</td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



</div>
</div>
<!-- End of Main Content -->

@include('layouts.partials.footer')
@include('layouts.partials.scripts')


<script>
    getValuesFromParams();


    function onSubmitAC() {
        let date_created = document.querySelector('#date_created').value;
        let date_updated = document.querySelector('#date_updated').value;
        let account = document.querySelector('#account').value;
        let ref = document.querySelector('#ref').value;

        var newURL = location.href.split("?")[0];
        window.history.pushState('object', document.title, newURL);

        date_created.value = date_updated
        date_created.value = date_created
        ref.value = ref
        account.value = account

        window.location.href = window.location.href +
            `?filter=true&item_type=zesa&status_id=13&like=created_at,${date_created}&order_ref=${ref}&order_details=${account}`;

    }

    function getValuesFromParams() {
        let date_created = document.querySelector('#date_created');
        // let date_updated = document.querySelector('#date_updated');
        let account = document.querySelector('#account');
        let ref = document.querySelector('#ref');


        try {
            const params = new Proxy(new URLSearchParams(window.location.search), {
                get: (searchParams, prop) => searchParams.get(prop),
            });

            let created_at = params.created_at;
            // let updated_at = params.updated_at;
            let order_details = params.order_details;
            let order_ref = params.order_ref;

            date_updated.value = updated_at;
            date_created.value = created_at;
            ref.value = order_ref;
            account.value = order_details;

        } catch (error) {
            console.log(error);
        }


    }
</script>
