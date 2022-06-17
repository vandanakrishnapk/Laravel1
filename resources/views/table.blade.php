<div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>id</th>
                      <th>Username</th>
                      <th>Date</th>
                      <th>email</th>
                      <th>Mob</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($users as $user)
                    <tr>
                     <td>{{$user->id}}</td>
                      <td>{{$user->username}}</td>
                      <td>{{$user->date}}</td>
                      <td>{{$user->email}}</td>
                      <td>{{$user->mobno}}</td>                       
                    </tr>
                    @endforeach 

                            
              
                  </tbody>
                </table>
              </div>