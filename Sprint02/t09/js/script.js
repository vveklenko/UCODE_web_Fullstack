function getFormattedDate(input) {
    let date, month, year, hours, minutes, day, result = '';
    if (typeof(input) == 'object') {
        date = input.getDate();
        month = input.getMonth() + 1;
        year = input.getFullYear();
        hours = input.getHours();
        minutes = input.getMinutes()

        if (date < 10) {
            result += '0' + date + '.';
        }
        else {
            result += date + '.';
        }

        if (month < 10) {
            result += '0' + month + '.';
        }
        else {
            result += month + '.';
        }

        result += year;

        if (hours < 10) {
            result += ' ' + '0' + hours;
            
        }else{
            result += ' ' + hours;
        }

        if (minutes < 10) {
            result += ':' + '0' + minutes + ' ';
            
        }else{
            result += ':' + minutes + ' ';
        }

        switch (input.getDay()) {
            case 1:
                day = 'Monday'
                break;

            case 2:
                day = 'Tuesday'
                break;

            case 3:
                day = 'Wednesday'
                break;

            case 4:
                day = 'Thursday'
                break;

            case 5:
                day = 'Friday'
                break;

            case 6:
                day = 'Saturday'
                break;

            case 7:
                day = 'Sunday'
                break;
        }
        result += day;
    }
    return result;
}