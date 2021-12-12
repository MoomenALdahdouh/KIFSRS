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
            /*events:[
                {id:'1', title:'Event 1',start:'2021-12-11',resourceId:'a'}
            ]*/
            eventSources: [
                {
                    url: 'events/fetch',
                }
            ],
            dateClick: function (info) {
                $('#modal-add-event').modal('show');
                $('#create_event').click(function () {
                    console.log("asd")
                    let eventTitle = "New N Event";
                    let eventStart = "2021-12-04 00:00:00";
                    let eventEnd = "2021-12-05 00:00:00";
                    let category_id = "0";
                    fetch('events/create', {
                        method: 'post',
                        body: JSON.stringify({eventTitle, eventStart, eventEnd, category_id}),
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

        //getDaysOfWeek(calendar)

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
