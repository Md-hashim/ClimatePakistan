//Success Stories Count:Start
$(document).ready(function () {
    // Function to update the count in the specified element
    function updateSuccessStoriesCount(elementId, count, text) {
        var element = $('#' + elementId);
        element.html('<span class="svg-icon svg-icon-6 svg-icon-white me-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" /><path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor" /></svg></span>' + count + ' ' + text);
    }

    // Fetch the JSON data from your Laravel route
    $.ajax({
        url: '/adb/success-stories/counts',
        type: 'GET',
        dataType: 'json',
        success: function (data) {
            updateSuccessStoriesCount('storyCount', data.totalSuccessStories, 'Total Stories');
            updateSuccessStoriesCount('imageCount', data.postedSuccessStoriesCount, 'Published Stories');
            updateSuccessStoriesCount('videoCount', data.pendingSuccessStoriesCount, 'Pending Stories');
        },
        error: function (error) {
            console.log('Error:', error);
        }
    });

    function updateCoursesCount(elementId, count, text) {
        var element = $('#' + elementId);
        element.html('<span class="svg-icon svg-icon-6 svg-icon-white me-2">' +
            '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">' +
            '<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />' +
            '<path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor" />' +
            '</svg>' +
            '</span>' + count + ' ' + text);
    }
    function fetchAndUpdateCourseCount() {
        $.ajax({
            url: '/adb/courses/counts',
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                console.log("Course",data)
                updateCoursesCount('courseCount', data.totalCourses, 'Course');
                updateCoursesCount('postedCourses', data.postedCourses, 'Posted Courses');
                updateCoursesCount('pendingCourses', data.pendingCourses, 'Pending Courses');
            },
            error: function (error) {
                console.log('Error:', error);
            }
        });
    }
    fetchAndUpdateCourseCount();
    setInterval(fetchAndUpdateCourseCount, 20000);

    function updateEventCount(elementId, count, text) {
        var element = $('#' + elementId);
        element.html('<span class="svg-icon svg-icon-6 svg-icon-white me-2">' +
            '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">' +
            '<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />' +
            '<path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor" />' +
            '</svg>' +
            '</span>' + count + ' ' + text);
    }
    function fetchAndUpdateEventCount() {
        $.ajax({
            url: '/adb/events/count',
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                updateEventCount('EventCount', data.totalEvents, 'Events');
                updateEventCount('activeEvents', data.activeEvents, 'Active Events');
                updateEventCount('expiredEvents', data.expiredEvents, 'Expired Events');
                updateEventCount('upcomingEvents', data.upcomingEventsCount, 'Upcoming Events');
            },
            error: function (error) {
                console.log('Error:', error);
            }
        });
    }
    // Initial load
    fetchAndUpdateEventCount();
    setInterval(fetchAndUpdateEventCount, 20000);
});
//Success Stories Count:End
