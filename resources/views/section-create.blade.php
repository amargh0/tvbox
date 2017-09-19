
@include('adminpanel.head')
@include('adminpanel.header')
@include('adminpanel.sidebar')

<section id="main-content">
    <section class="wrapper">
        <section class="panel">
            <header class="panel-heading">
                Form Elements
            </header>
            <input type="hidden" name="X-CSRF-TOKEN" id="" value="{{ csrf_token() }}">
            <div class="panel-body">
                <form class="form-horizontal bucket-form"  action="{{ asset('/section/store') }}" method="post">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Channel Name</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="section" id="" placeholder="Section">
                        </div>
                    </div>
                    <div class="col-lg-offset-2 col-lg-10">
                        <button type="submit" class="btn btn-danger">submit</button>
                    </div>
            </div>
            </form>
            </div>
        </section>
@include('adminpanel.footer')