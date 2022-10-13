function searchMovie() {
    $('#countries').html('');


    $.ajax({

        url: 'https://world-cup-json-2022.fly.dev/matches/country/' + $('#search-input').val(),
        type: 'get',
        dataType: 'json',

        success: function (result) {
            console.log(result)

            if ( result ) {
                
                let matches = result;

                $.each(matches, function (i, data) {
                    $('#countries').append(`
                    <div class="card m-4" style="width: 25rem;">
                            <div class="card-body">
                            <h5 class="card-title">`+ data.datetime + `</h5>
                            <h6 class="card-subtitle mb-2 text-muted">`+ data.location +`</h6>
                            <h6 class="card-subtitle mb-2 text-muted">`+ data.venue +`</h6>
                            <div class="row">
                            <div class="col-6 flag-countries">
                            <img src="https://gacorterus.vip/flag/`+ data.home_team.country +`.png" alt="">
                            <h5 class="country">` + data.home_team.name +`</h5>
                            </div>
                            <div class="col-6 flag-countries">
                            <div class="flag-countries" style="margin-left:15px">
                            <img src="https://gacorterus.vip/flag/` + data.away_team.country +`.png" alt="">
                            <h5 class="country">` + data.away_team.name +`</h5>
                        </div>
                        </div>
                  </div>
                    `)
                });

                $('#countries').val('');
        } else {
            $('#countries').html(`
                    <div class="col">
                    <h1 class="text-center">`+ result.error +`</h1>
                    </div>
                    `)
                }
            }
        });
    }

    $('#search-button').on('click', function(){
        searchMovie();
    });
    
    $('#search-input').on('keyup', function (e) {
        if(e.keyCode === 13) {
            searchMovie();
        }
    });

    
