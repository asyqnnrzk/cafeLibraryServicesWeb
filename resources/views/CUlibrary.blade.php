<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/CUuser.css">
    <title>Create or Update Page for Library</title>
</head>
<body>
    <header>
        <h1 >Create or Update for Library <button style="float: right">Profile</button></h1>
    </header>
    <main>
        <div class="container">
            <button>Back</button>
            <form>
                <div id="form-container">
                    <table>
                        <tr>
                            <td>Name:</td>
                            <td>
                                <input type="text" name="name" placeholder="eg: Laman Hikmah UTeM">
                            </td>
                        </tr>
                        <tr>
                            <td>Status:</td>
                            <td>
                                <input type="number" name="status" placeholder="0 for inactive, 1 for active" min="0" max="1" style="width: 170px">
                            </td>
                        </tr>
                        <tr>
                            <td>Address:</td>
                            <td>
                                <input type="text" name="address" placeholder="eg: UTeM, Durian Tunggal">
                            </td>
                        </tr>
                    </table>
                </div>
            </form>
           <button style="float: right" class="submit-btn">Submit</button>
        </div>
    </main>
    <footer>2023 Cafe Library Services</footer>
</body>
</html>