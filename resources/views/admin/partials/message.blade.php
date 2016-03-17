@if(Session::has('alert'))
    <div class="container">
        @if(Session::has('alert.success'))
            <div class="alert alert-success alert-dismissible text-center" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h2><strong><i class="fa fa-check-circle"></i></strong> {{ \Session::get('alert.success') }}</h2>
            </div>
        @endif

        @if(Session::has('alert.warning'))
            <div class="alert alert-warning alert-dismissible text-center" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h2><strong><i class="fa fa-exclamation-circle"></i></strong> {{ \Session::get('alert.warning') }}</h2>
            </div>
        @endif

        @if(Session::has('alert.info'))
            <div class="alert alert-info alert-dismissible text-center" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h2><strong><i class="fa fa-info-circle"></i></strong> {{ \Session::get('alert.info') }}</h2>
            </div>
        @endif

        @if(Session::has('alert.danger'))
            <div class="alert alert-danger alert-dismissible text-center" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h2><strong><i class="fa fa-times-circle"></i></strong> {{ \Session::get('alert.danger') }}</h2>
            </div>
        @endif
    </div>
@endif
