(function ($) {
    'use strict';
    $(document).ready(function () {
        // init datepicker for search meetings
        $(".tutor_zoom_datepicker").datepicker({dateFormat: 'yy-mm-dd'});

        $('.tutor-zoom-meeting-modal-open-btn').on('click', function (e) {
            e.preventDefault();

            var $that = $(this);
            var meeting_id = $that.attr('data-meeting-id');
            var topic_id = $that.attr('data-topic-id');
            var click_form = $that.attr('data-click-form');
            var course_id = $('#post_ID').val();

            if (typeof course_id == 'undefined') {
                course_id = $that.attr('data-course-id');
            }
            /**
             * Frontend support added
             * 
             * @since version 1.9.4
             */
            var frontend_ajax;
            if ( tz_frontend_ajax.ajaxurl ) {
                frontend_ajax = tz_frontend_ajax.ajaxurl
            }
            $.ajax({
                url: frontend_ajax ? frontend_ajax : ajaxurl,
                type: 'POST',
                data: { meeting_id, topic_id, course_id, click_form, action: 'tutor_zoom_meeting_modal_content' },
                beforeSend: function () {
                    $that.addClass('tutor-updating-message');
                },
                success: function (data) {
                    $('.tutor-zoom-meeting-modal-wrap .modal-container').html(data.data.output);
                    $('.tutor-zoom-meeting-modal-wrap').attr('data-topic-id', topic_id).addClass('show');
                },
                complete: function () {
                    $that.removeClass('tutor-updating-message');
                    $('.tutor_zoom_timepicker').timepicker({timeFormat: 'hh:mm TT'});
                    // init datepicker for create/update meetings
                    $(".tutor_zoom_datepicker").datepicker({
                        dateFormat: 'dd/mm/yy',
                        minDate: 0
                    });
                }
            });
        });

        $(document).on('click', '.tutor-zoom-meeting-modal-open-btn', function (e) {
            e.preventDefault();

            var $that = $(this);
            var meeting_id = $that.attr('data-meeting-id');
            var topic_id = $that.attr('data-topic-id');
            var click_form = $that.attr('data-click-form');
            var course_id = $('#post_ID').val();

            if (typeof course_id == 'undefined') {
                course_id = $that.attr('data-course-id');
            }

            $.ajax({
                url: ajaxurl,
                type: 'POST',
                data: { meeting_id, topic_id, course_id, click_form, action: 'tutor_zoom_meeting_modal_content' },
                beforeSend: function () {
                    $that.addClass('tutor-updating-message');
                },
                success: function (data) {
                    $('.tutor-zoom-meeting-modal-wrap .modal-container').html(data.data.output);
                    $('.tutor-zoom-meeting-modal-wrap').attr('data-topic-id', topic_id).addClass('show');
                },
                complete: function () {
                    $that.removeClass('tutor-updating-message');
                    $('.tutor_zoom_timepicker').timepicker({timeFormat: 'hh:mm TT'});
                    // init datepicker for create/update meetings
                    $(".tutor_zoom_datepicker").datepicker({
                        dateFormat: 'dd/mm/yy',
                        minDate: 0
                    });
                }
            });
        });

        $('.tutor-zoom-meeting-delete-btn').on('click', function (e) {
            e.preventDefault();

            if( ! confirm('Are you sure?')){
                return;
            }
            /**
             * Frontend support added
             * 
             * @since version 1.9.4
             */
            var frontend_ajax;
            if ( tz_frontend_ajax.ajaxurl ) {
                frontend_ajax = tz_frontend_ajax.ajaxurl
            }    
            var $that = $(this);
            var meeting_id = $that.attr('data-meeting-id');
            $.ajax({
                url: frontend_ajax ? frontend_ajax : ajaxurl,
                type: 'POST',
                data: { meeting_id, action: 'tutor_zoom_delete_meeting' },
                beforeSend: function () {
                    $that.addClass('tutor-updating-message');
                },
                success: function (data) {
                    if (data.success) {
                        $that.closest('.tutor-zoom-meeting-item').remove();
                    }
                },
                complete: function () {
                    $that.removeClass('tutor-updating-message');
                }
            });
        });

        /*
        * Readonly field
        */
        $(document).on('keydown', '.readonly', function(e) {
            e.preventDefault();
        });

    });
})(jQuery);

window.addEventListener('DOMContentLoaded', function(){
    /**
     * Copy zoo id, password, host mail for the frontend dashboard
     * 
     * @since 1.9.4
     */
    let copyIcon = document.querySelectorAll('.tutor-icon-copy');
    for (let ci of copyIcon) {
        ci.onclick = (event) => {
            //is has active class on any info then remove and init class on current target
            for ( let c of copyIcon ) {
                c.classList.remove('copied')
            }
            event.currentTarget.classList.add('copied');
            let zoomInfo = event.currentTarget.dataset.zoomInfo;
            let elem = document.createElement('textarea');
            elem.value = zoomInfo;
            document.body.appendChild(elem);
            elem.select();
            document.execCommand("copy");
            document.body.removeChild(elem);
        }
    }
});