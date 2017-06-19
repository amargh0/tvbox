
@include('incloud.header')

@include('incloud.sidebar')


<div class="row">
  <div class="col-md-12">
    <a href="{{ asset('/channel/create') }}" class="btn btn-default">Create</a>
  </div>
</div>
            <div class="bs-example">
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Channel Name</th>
                              <th>Ul Channel</th>
                              <th>Edit</th>



                            </tr>
                          </thead>

                          <tbody>
                          @foreach($channels as $channel)
                            <tr>
                              <td>{{ $channel->channelname }}</td>
                              <td>{{ $channel->ulchannel }}</td>
                              <td>
                                <button class="fa fa-pencil-square-o fa-2x" onclick="editCh({{ $channel->channelname }})"></button>
                                <button class="fa fa-trash-o fa-2x" aria-hidden="true" onclick="deleteCh({{ $channel->channelname }})"></button>
                              </td>

                            </tr>
                          @endforeach
                          </tbody>
                        </table>
                      </div>
                      <!-- /.table-responsive -->
                    </div>


<script>
    function editCh(channel) {
        console.log('edit function works',channel);
    }
    function deleteCh() {
        console.log('delete function works');
    }
</script>


  </body>

</html>
