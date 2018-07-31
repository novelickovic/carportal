@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-xl-12">
            <div class="breadcrumb-holder">
                <h1 class="main-title float-left">Posts</h1>
                <ol class="breadcrumb float-right">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item active">Posts</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- end row -->

    @if(session('message'))
        <div class="row">
            <div class="col-sm-12">
                <div class="alert alert-success">
                    <h4 class="alert-heading">{{session('message')}}</h4>
                </div>
            </div>
        </div>
    @endif

    @if(session('message_error'))
        <div class="row">
            <div class="col-sm-12">
                <div class="alert alert-danger">
                    <h4 class="alert-heading">{{session('message_error')}}</h4>
                </div>
            </div>
        </div>
    @endif



    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

            <div class="card mb-3">

                <div class="card-header">
                    <span class="pull-right"><a href="{{route('posts.create')}}" class="btn btn-primary btn-sm"><i class="fa fa-plus" aria-hidden="true"></i> Add new post</a></span>
                    <h3><i class="fa fa-file-text-o"></i> All posts</h3>
                </div>
                <!-- end card-header -->

                <div class="card-body">


                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Post details</th>
                            <th width="160">Category</th>
                            <th width="100">Actions</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr >
                            <td>
                                <span style="float: left; margin-right:10px;"><img style="max-width:140px; height:auto;" src="https://www.pikeadmin.com/demo-pro/uploads/small/8d14906a-blueprint-api-production.jpg" /></span>
                                <h5>Duis scelerisque eros sit amet risus lobortis</h5>							Posted by <b>Pike Admin</b> at Nov 29 2017<br />
                                <small>Duis scelerisque eros sit amet risus lobortis, quis interdum neque auctor. Nulla cursus maximus lacus at efficitur. In lobortis ante vitae nulla semper, in volutpat libero aliquet. Morbi sit amet nibh vitae metus interdum finibus sed nec nisl. Ut quam dolor, bibendum id maximus ut, suscipit consectetur sem. Vivamus non ex quis sem malesuada semper vel id dui. In lorem velit, volutpat ut velit non,...</small>
                            </td>

                            <td>Blog</td>

                            <td>
                                <a href="account.php?page=pro-articles-edit&article_id=8" class="btn btn-primary btn-sm" data-placement="top" data-toggle="tooltip" data-title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                <a href="javascript:deleteRecord_8('8');" class="btn btn-danger btn-sm" data-placement="top" data-toggle="tooltip" data-title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                <script language="javascript" type="text/javascript">
                                    function deleteRecord_8(RecordId)
                                    {
                                        if (confirm('Confirm delete')) {
                                            window.location.href = 'core/ArticleDelete.php?article_id=8&pagenum=1';
                                        }
                                    }
                                </script>
                            </td>
                        </tr>



                        </tbody>
                    </table>



                </div>
                <!-- end card-body -->

            </div>
            <!-- end card -->

        </div>
        <!-- end col -->

    </div>
    <!-- end row -->




@endsection