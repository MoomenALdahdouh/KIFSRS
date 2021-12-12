$(function () {

    const csrfToken = document.head.querySelector("[name=csrf-token][content]").content
    $(document).ready(function () {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            selectable: true,
            height: 660,
            headerToolbar: {
                left: 'prev next today',
                center: 'title',
                right: 'dayGridMonth dayGridWeek dayGridDay listMonth'
            },
            //themeSystem: 'bootstrap',
            initialView: 'dayGridMonth',
            displayEventTime: true,
            eventSources: [
                {
                    url: 'events/fetch',
                }
            ],
            dateClick: function (info) {
                $('#modal-add-event').modal('show');
                $('#create_event').click(function () {
                    let title_en = $('#title_en').val();
                    let title_ar = $('#title_ar').val();
                    let description_en = $('#description_en').val();
                    let description_ar = $('#description_ar').val();
                    let event_start = $('#start').val();
                    let event_end = $('#end').val();
                    let category_id = "0";
                    fetch('events/create', {
                        method: 'post',
                        body: JSON.stringify({title_en, title_ar, event_start, event_end, category_id, description_en,
                            description_ar}),
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': csrfToken,
                        },
                    }).then(e => {
                        $('#successfully-modal').modal('show');
                        calendar.refetchEvents();
                    })
                });
            },
            /*select: function (date) {
                $('#modal-alert').modal('show');
                let eventTitle = "New Event";
                let eventStart = date.startStr;
                let eventEnd = date.endStr;
                //let ff = prompt('add new title');
                fetch('events/create', {
                    method: 'post',
                    body: JSON.stringify({eventTitle, eventStart,eventEnd}),
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken,
                    },
                }).then(e=>{
                    //console.log('success')
                    calendar.refetchEvents();
                })
            }*/
        });
        calendar.render();

        /*$('#sas').click(function () {
            $.ajax({
                method: "get",
                url: "/events/show/" + 26,
                data: {
                    _token: $("input[name=_token]").val(),
                },
                success: function (response) {
                    console.log(response)
                }
            });
        });*/
    });


    function getDaysOfWeek(calendar) {
        let startDayWeek = calendar.view.activeStart;
        let endDayWeek = calendar.view.activeEnd;

        var firstDay = new Date(startDayWeek);
        var lastDay = new Date(endDayWeek);

        dayStartWeek = firstDay.toISOString().substring(0, 10);
        dayEndWeek = lastDay.toISOString().substring(0, 10);
        console.log(dayStartWeek)
        console.log(dayEndWeek)
    }

});
