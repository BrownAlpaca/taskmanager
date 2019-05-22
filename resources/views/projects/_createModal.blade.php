        
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createProjectModal">
          <i class="fa fa-btn fa-plus"></i>
        </button>

        <!-- Modal -->
        <div class="modal fade" id="createProjectModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="createProjectModalabel">Create project</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              {!! Form::open(['route'=>'projects.store', 'method'=>'POST', 'files'=>true]) !!}
              <div class="modal-body">               

                  <div class="form-group">
                    {!! Form::label('name', 'project name: ') !!}
                    {!! Form::text('name', '', ['class'=>'form-control']) !!}
                  </div>

                  <div class="form-group">
                    {!! Form::label('thumbnail', 'project image: ') !!}
                    {!! Form::file('thumbnail', ['class'=>'form-control']) !!}
                  </div>

              </div>
              <div class="modal-footer">
                  {!! Form::submit('create project', ['class'=>'btn btn-primary']) !!}             
              </div>
              {!! Form::close() !!}
            </div>
          </div>
        </div>