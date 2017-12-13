@extends('layout.opportunities')
@extends('layout.navbar')
    @section('navContent')
        <ul class="right hide-on-med-and-down">
            <li><a href="index.php">Home</a></li>           
            <li><a href="\gallery">Gallery</a></li>
            <li><a href="#">Apply Now</a></li>
        </ul>
    @endsection

    @section('bgphoto')
        <img src=<?php echo asset("img/mini_careers.jpg")?>>
    @endsection

    @section('content')
        @foreach($headers as $entity)
            <?php
                $responsibilities = explode("\n", $entity['responsibilities']);
                $requirements = explode("\n", $entity['requirements']);
                $advantages = explode("\n", $entity['advantages']);
                $general_qualifications = explode("\n", $entity['general_qualifications']);
            ?>
            
            <div class="section white container">                        
                <ul class="collapsible popout" data-collapsible="accordion">
                    <li>
                        <div class="collapsible-header active">
                            <i class="material-icons">filter_drama</i>{{$entity->job_title}}
                        </div>
                        <div class="collapsible-body">
                            <span>
                                {{$entity->job_description}}
                            </span>   
                            <br><br>
                            
                        <?php echo("
                            <a href=\"#modal_".$entity->job_id."\" class=\"waves-effect waves-light btn indigo darken-4 btn modal-trigger\">
                        "); ?>
                                Explore
                            </a>
                            <a href="#" class="waves-effect waves-light btn teal darken-3 btn modal-trigger">
                                Apply Now
                            </a>
                        </div>
                    </li>
                </ul>
            </div>

            {{--  CORRESPONDING MODAL FOR THE JOB  --}}
        <?php echo("
            <div id=\"modal_".$entity->job_id."\" class=\"modal modal-fixed-footer\">
        "); ?>
                <div class="modal-content">
                    
                    <h4>{{$entity->job_title}}</h4>
                    <hr style="color:#101755;">
                    
                     
                    @if($entity['responsibilities'] != "")
                        <h5>Responsibilities</h5>
                        <ul>
                            @foreach($responsibilities as $responsibility)                                
                                <div class="valign-center"> 
                                <i class="tiny material-icons indigo-text text-darken-4">check_circle</i>
                                <span>{!!$responsibility!!}</span><br>
                                </div>
                            @endforeach
                        </ul>
                        
                    @endif
                    
                    
                    @if($entity['requirements'] != "")
                    <br>
                    <h5>Requirements</h5>
                        <ul>
                            @foreach($requirements as $requirement)
                                <div class="valign-center"> 
                                <i class="tiny material-icons indigo-text text-darken-4">check_circle</i>
                                <span>{!!$requirement!!}</span><br>
                                </div>
                            @endforeach
                        </ul>
                    @endif

                    
                    @if($entity['advantages'] != "")
                    <br>
                    <h5>Advantages</h5>
                        <ul>
                            @foreach($advantages as $advantage)
                                <li>
                                    <?php echo(chr(7));?> {{--  insert bullets here  --}}
                                    {!!$advantage!!}
                                </li>
                            @endforeach
                        </ul>
                    @endif

                    
                    @if($entity['general_qualifications'] != "")
                    <br>
                    <h5>General Qualifications</h5>
                        <ul>
                            @foreach($general_qualifications as $qualification)
                                <li>
                                    <?php echo(chr(7));?> {{--  insert bullets here  --}}
                                    {!!$qualification!!}
                                </li>
                            @endforeach
                        </ul>
                    @endif


                </div>
                <div class="modal-footer">
                <a href="#!" class=" waves-effect waves-green btn teal darken-3">Apply Now</a>
                <a href="#!" class="modal-action modal-close waves-effect red btn">Close</a>
                </div>
            </div>

        @endforeach
    @endsection

