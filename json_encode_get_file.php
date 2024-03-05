<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Json Encode</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
        <h1 class="mx-auto">Json File Get</h1>
    <div class="load_data">
        <table class="load_table" border="1" cellpadding="7px" width="100%">
            <tr>
                <th>Id</th>
                <th>Student Name</th>
                <th>Roll Number</th>
                <th>Registration number</th>
                <th>Year</th>
            </tr>
        </table>
    </div>
    


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        // $.getJSON(
        //     "json_encode.php",
        //     function(data){
        //         // console.log(data);
        //         $.each(data, function(key, value){
        //             $('.load_data').append(value.id + ' ' + value.student_name + ' ' + value.roll_number + ' ' + value.ragistration_number + ' ' + value.exam_year + "<br>");
        //         });
        //     }

        // );

        $.ajax({
            type: "POST",
            url: "json_encode.php",
            dataType: "json",
            success:  function(data){
                // console.log(data);
                $.each(data, function(key, value){
                    $('.load_table').append("<tr>\
                                        <td>" + value.id + "</td>\
                                        <td>" + value.student_name + "</td>\
                                        <td>"+ value.roll_number + "</td>\
                                        <td>" + value.ragistration_number + "</td>\
                                        <td>" + value.exam_year + "</td>\
                                    </tr>");
                });
            }
        });

    </script>
</body>
</html>