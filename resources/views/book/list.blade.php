@section("title","Thu vien sach")
@section("content-header")
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Book listing</h1>
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection
@section("main-content")
    <div class="card">
        <div class= "card-header">
            <h3 class="card-title">Bordered Table</h3>
            <div class="card-tools">
                <form action="{{url("")}}" method="get">
                    <div class="input-group input-group-sm" style="width: 700px;">
                        <select name="category_id" class="mr-1">
                            <option value="0">Choose category...</option>
                            @foreach($data as $item)
                                <option @if(app("request")->input("author_id")== $item->author_id) selected @endif value="{{$item->author_id}}">{{$item->author_id}}</option>
                                <option @if(app("request")->input("title")== $item->title) selected @endif value="{{$item->title}}">{{$item->title}}</option>
                                <option @if(app("request")->input("pub_year")== $item->pub_year) selected @endif value="{{$item->pub_year}}">{{$item->pub_year}}</option>
                            @endforeach
                        </select>
                        <input type="text" value="{{app("request")->input("search")}}" name="search" class="form-control float-right" placeholder="Search">

                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Author ID</th>
                    <th>Title</th>
                    <th>ISBN</th>
                    <th>Pub Year</th>
                    <th>Available</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->author_id}}</td>
                        <td><img src="{{$item->title}}" class="img-thumbnail" width="80" /> </td>
                        <td>{{$item->ISBN}}</td>
                        <td>{{$item->pub_year}}</td>
                        <td>{{$item->available}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
            {!! $data->appends(app("request")->input())->links("pagination::bootstrap-4") !!}
        </div>
    </div>
    <!-- /.card -->
@endsection
