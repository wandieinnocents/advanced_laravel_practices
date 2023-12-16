<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table with Horizontal and Vertical Headings</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        th.rotate {
            /* Rotate the text for vertical headings */
            transform: rotate(-45deg);
            white-space: nowrap;
        }
    </style>
</head>

<body>

    <h2>Table with Horizontal and Vertical Headings</h2>

    <table>
        <thead>
            {{-- heading level 1 --}}
            <tr>
                <th colspan="18">
                    <center>DLT-1: DISTRICT LEAGUE TABLE MONTHLY KPI DASHBOARD</center>
                </th>
                <th colspan="2"> DLT-1 (03-20-23)</th>
                <!-- Add more horizontal headings as needed -->
            </tr>

            {{-- heading level 2 --}}
            <tr>
                <th colspan="3">District</th>
                <th colspan="4"> Month</th>
                <th colspan="3"> Fiscal Year</th>

                <th colspan="5"> Fiscal Year to date month</th>
                <th colspan="3"> Prior YTD Mos</th>
                <th colspan="2"> Date</th>
            </tr>

            {{-- heading level 3 --}}
            <tr>
                <th colspan="5">DATA ELEMENTS</th>
                <th>This <br> Mo</th>
                <th>1-Mo <br> Prior</th>
                <th>2-Mo <br> Prior</th>
                <th>Fiscal <br> YTD</th>
                <th>Prior <br> YTD</th>


                <th colspan="5">DATA ELEMENTS</th>
                <th>This <br> Mo</th>
                <th>1-Mo <br> Prior</th>
                <th>2-Mo <br> Prior</th>
                <th>Fiscal <br> YTD</th>
                <th>Prior <br> YTD</th>
            </tr>



        </thead>

        {{-- TABLE BODY  --}}
        <tbody>
            <tr>
                <th colspan="5">PATIENT ATTENDANCE</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>

                <th colspan="5">EH INSPECTOR COMMUNITY OUTREACH</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>

            <tr>
                {{-- patient attendnace --}}
                <td colspan="5">1.Total OPD attendance</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

                {{-- inspetior  attendnace --}}
                <td colspan="5">29. Health inspector outreach events</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            <tr>
                <td colspan="5">2. % to Last Year</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

                <td colspan="5">30. EH outreach event attendees</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            <tr>
                <td colspan="5">3. Maternity admissions</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

                <td colspan="5" style="font-weight: bold;">INFECTIOUS DISEASES</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            <tr>
                <td colspan="5">4. % to Last Year</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

                <td colspan="5" >31. TB notification rate/100,000 (quarterly)</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>







        </tbody>
    </table>

</body>

</html>
