
<div class="container-fluid">
    <div class="row" id="edit" style="margin-top: 1%">
        <form class="form-inline">
            <div class="btn btn-info" id="js1">Edit Educational Detail</div>
            <div class="btn btn-info" id="js2">Edit Research And Publication</div>
            <div class="btn btn-info" id="js3">Edit Certications And Courses</div>
            <div class="btn btn-info" id="js4">Edit Jobs Experinces</div>
            <div class="btn btn-info" id="js5">Edit Seminar Detail</div>
            <div class="btn btn-info" id="js6">Edit Volunteer Detail</div>
            <div class="btn btn-info" id="js7">Edit Award Detail</div>
            <div class="btn btn-info" id="js8">Edit Other Info</div>
        </form>
    </div>
</div>

<div class="row" id="jsedu">
        @include('partials.jseducation');
        <div class="btn btn-primary" id="btn2" style="float: right;">Skip</div>
    </div>
    <div class="row" id="jsrespub">
        @include('partials.jsrespub');
        <div class="btn btn-primary" id="btn3" style="float: right;">Skip</div>
    </div>
    <div class="row" id="jscertificate">
        @include('partials.jscertificate');
        <div class="btn btn-primary" id="btn4" style="float: right;">Skip</div>
    </div>
    <div class="row" id="jsjob">
        @include('partials.jsjob');
        <div class="btn btn-primary" id="btn5" style="float: right;">Skip</div>
    </div>
    <div class="row" id="jsseminar">
        @include('partials.jsseminar');
        <div class="btn btn-primary" id="btn6" style="float: right;">Skip</div>
    </div>
    <div class="row" id="jsaward">
        @include('partials.jsaward');
        <div class="btn btn-primary" id="btn7" style="float: right;">Skip</div>
    </div>
    <div class="row" id="jsvolunteer">
        @include('partials.jsvolunteer');
        <div class="btn btn-primary" id="btn8" style="float: right;">Skip</div>
    </div>
    <div class="row" id="jsotherinfo">
        @include('partials.jsotherinfo')
        <div class="btn btn-primary" id="btn9" style="float: right;">Skip</div>
    </div>

</div>


<script>

    $(function(){
//        $('#edit').hide();
        $('#jsedu').hide();
        $('#jsrespub').hide();
        $('#jscertificate').hide();
        $('#jsjob').hide();
        $('#jsseminar').hide();
        $('#jsaward').hide();
        $('#jsvolunteer').hide();
        $('#jsotherinfo').hide();


        $('#btn').click(function(){
            $('#jsedu').show();
            $('#p-info').hide();
        })

        $('#btn2').click(function(){
            $('#jsrespub').show();
            $('#jsedu').hide();
            $('#p-info').hide();
        })

        $('#btn3').click(function(){
            $('#jscertificate').show();
            $('#jsrespub').hide();
            $('#jsedu').hide();
            $('#p-info').hide();
        })

        $('#btn4').click(function(){
            $('#jsjob').show();
            $('#jscertificate').hide();
            $('#jsrespub').hide();
            $('#jsedu').hide();
            $('#p-info').hide();
        })

        $('#btn5').click(function(){
            $('#jsseminar').show();
            $('#jsjob').hide();
            $('#jscertificate').hide();
            $('#jsrespub').hide();
            $('#jsedu').hide();
            $('#p-info').hide();
        })

        $('#btn6').click(function(){
            $('#jsaward').show();
            $('#jsseminar').hide();
            $('#jsjob').hide();
            $('#jscertificate').hide();
            $('#jsrespub').hide();
            $('#jsedu').hide();
            $('#p-info').hide();
        })

        $('#btn7').click(function(){
            $('#jsvolunteer').show();
            $('#jsaward').hide();
            $('#jsseminar').hide();
            $('#jsjob').hide();
            $('#jscertificate').hide();
            $('#jsrespub').hide();
            $('#jsedu').hide();
            $('#p-info').hide();
        })

        $('#btn8').click(function(){
            $('#p-info').show();
            $('#edit').hide();
            $('#jsvolunteer').hide();
            $('#jsaward').hide();
            $('#jsseminar').hide();
            $('#jsjob').hide();
            $('#jscertificate').hide();
            $('#jsrespub').hide();
            $('#jsedu').hide();
        })

        $('#btn9').click(function(){
            $('#jsotherinfo').show();
            $('#p-info').show();
            $('#edit').show();
            $('#jsvolunteer').hide();
            $('#jsaward').hide();
            $('#jsseminar').hide();
            $('#jsjob').hide();
            $('#jscertificate').hide();
            $('#jsrespub').hide();
            $('#jsedu').hide();
        })


        $('#js1').click(function(){
            $('#edit').show();
            $('#p-info').hide();
            $('#jsvolunteer').hide();
            $('#jsaward').hide();
            $('#jsseminar').hide();
            $('#jsjob').hide();
            $('#jscertificate').hide();
            $('#jsrespub').hide();
            $('#jsedu').show();
        })
        $('#js2').click(function(){
            $('#edit').show();
            $('#p-info').hide();
            $('#jsvolunteer').hide();
            $('#jsaward').hide();
            $('#jsseminar').hide();
            $('#jsjob').hide();
            $('#jscertificate').hide();
            $('#jsrespub').show();
            $('#jsedu').hide();
        })

        $('#js3').click(function(){
            $('#edit').show();
            $('#p-info').hide();
            $('#jsvolunteer').hide();
            $('#jsaward').hide();
            $('#jsseminar').hide();
            $('#jsjob').hide();
            $('#jscertificate').show();
            $('#jsrespub').hide();
            $('#jsedu').hide();
        })

        $('#js4').click(function(){
            $('#edit').show();
            $('#p-info').hide();
            $('#jsvolunteer').hide();
            $('#jsaward').hide();
            $('#jsseminar').hide();
            $('#jsjob').show();
            $('#jscertificate').hide();
            $('#jsrespub').hide();
            $('#jsedu').hide();
        })

        $('#js5').click(function(){
            $('#edit').show();
            $('#p-info').hide();
            $('#jsvolunteer').hide();
            $('#jsaward').hide();
            $('#jsseminar').show();
            $('#jsjob').hide();
            $('#jscertificate').hide();
            $('#jsrespub').hide();
            $('#jsedu').hide();
        })

        $('#js6').click(function(){
            $('#edit').show();
            $('#p-info').hide();
            $('#jsvolunteer').show();
            $('#jsaward').hide();
            $('#jsseminar').hide();
            $('#jsjob').hide();
            $('#jscertificate').hide();
            $('#jsrespub').hide();
            $('#jsedu').hide();
        })

        $('#js7').click(function(){
            $('#edit').show();
            $('#p-info').hide();
            $('#jsvolunteer').hide();
            $('#jsaward').show();
            $('#jsseminar').hide();
            $('#jsjob').hide();
            $('#jscertificate').hide();
            $('#jsrespub').hide();
            $('#jsedu').hide();
        })

        $('#js8').click(function(){
            $('#edit').show();
            $('#p-info').hide();
            $('#jsvolunteer').hide();
            $('#jsaward').hide();
            $('#jsseminar').hide();
            $('#jsjob').hide();
            $('#jscertificate').hide();
            $('#jsrespub').hide();
            $('#jsedu').hide();
            $('#jsotherinfo').show();
        })
    })
  
  $(function() {
    $( "#datepicker" ).datepicker();
  });

</script>