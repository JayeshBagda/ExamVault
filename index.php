<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BCA Exam Papers</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            height: 140vh;
            background: #f9fafb;
        }


        h1 {
            text-align: center;
            font-size: 45px;
            font-family: Arial, Helvetica, sans-serif;
            font-style: italic;
        }

        .underline {
            width: 250px;
            height: 4px;
            background: dodgerblue;
            margin: auto;
            margin-bottom: 8%;
        }

        .inpoot {
            background: white;
            box-shadow: 0 4px 15px 6px rgba(0, 0, 0, 0.08);
            height: 110px;
            width: 950px;
            align-items: center;
            display: block;
            margin-left: 33%;
            border-radius: 9px;
            justify-content: space-evenly;
            margin: auto;
            padding: auto;
            margin-bottom: 6%;
            padding-top: 15px;
            border-top: 4px solid dodgerblue;
            /* box-shadow: 0 0 8px rgba(0, 0, 0, 0.4); */
        }

        input {
            width: 180px;
            padding: 10px 15px;
            border-radius: 8px;
            border: 1px solid #ddd;
            outline: none;
            margin-top: 20px;

            /* soft shadow */
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);

            /* smooth animation */
            transition: all 0.3s ease;
        }

        #first {
            text-align: center;
            margin-left: 18%;
            height: 3vh;
            font-size: 15px;
            font-weight: bold;
        }


        #sem {
            margin-left: 3%;
            height: 5vh;
            width: 170px;
            font-size: 15px;
            outline: none;
            border: 1px solid #ddd;
            cursor: pointer;
        }

        #year {
            margin-left: 3%;
            border-radius: 5px;
            height: 5vh;
            width: 170px;
            font-size: 15px;
            outline: none;
            border: 1px solid #ddd;
            cursor: pointer;
        }


        input::placeholder {
            color: #999;
            font-size: 14px;
        }

        input:focus {
            border: 1px solid dodgerblue;
            box-shadow: 0 0 8px rgba(30, 144, 255, 0.4);
        }

        .sel {
            font-size: 14px;
            margin-left: 10%;
            border-radius: 5px;
            height: 35px;
        }

        .sel1 {
            font-size: 14px;
            margin-left: 15%;
            border-radius: 5px;
            margin-bottom: 20%;
        }

        .container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
            width: 65%;
            margin: auto;
            justify-items: center;
        }

        .card {
            background: white;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            width: 220px;
            height: 210px;
            margin-top: 20px;
            text-align: center;
            border-radius: 15px;
            padding: 15px;
            border-top: 5px solid dodgerblue;
            transition: all 0.3s ease;
            font-family: 'Times New Roman', Times, serif;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        Button {
            margin-top: 35%;
            color: white;
            size: 20px;
            width: 70%;
            height: 15%;
            border-radius: 10px;
            background-color: dodgerblue;
            cursor: pointer;
        }

        Button:hover {
            background-color: rgb(69, 248, 69);
            color: black;
        }
    </style>
</head>

<body>

    <div class="parent">

        <div>
            <header>
                <h1>Question Papers</h1>
                <div class="underline"></div>
            </header>
        </div>

        <div class="inpoot">
            <input type="text" placeholder="Search Your Subject..." id="first">

            <select class="sel" id="sem">
                <option value="Sem-1">Sem-1</option>
                <option value="Sem-2">Sem-2</option>
                <option value="Sem-3">Sem-3</option>
                <option value="Sem-4">Sem-4</option>
                <option value="Sem-5">Sem-5</option>
                <option value="Sem-6">Sem-6</option>
            </select>

            <select id="year">
                <option value="YEAR">Select Year</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
                <option value="2025">2025</option>
            </select>

        </div>

        <div class="container">

            <div class="card" data-year="2025" data-sem="Sem-4" class="title">
                <h2>Java</h2><br>
                <p>Semester 4</p>
                <p>Year 2025</p>
             <a href="download.php?id=1">
                <Button>Download</Button>
             </a>
            </div>

            <div class="card" data-year="2025" data-sem="Sem-4" class="title">
                <h2>UNIX</h2><br>
                <p>Semester 4</p>
                <p>Year 2025</p>
             <a href="download.php?id=2">
                <Button>Download</Button>
             </a>
            </div>

            <div class="card" data-year="2025" data-sem="Sem-4" class="title">
                <h2>C#</h2><br>
                <p>Semester 4</p>
                <p>Year 2025</p>
             <a href="download.php?id=3">
                <Button>Download</Button>
             </a>
            </div>

            <div class="card" data-year="2025" data-sem="Sem-4" class="title">
                <h2>Digital Empowerment</h2><br>
                <p>Semester 4</p>
                <p>Year 2025</p>
             <a href="download.php?id=4">
                <Button>Download</Button>
             </a>
            </div>

            <div class="card" data-year="2025" data-sem="Sem-4" class="title">
                <h2>SEO</h2><br>
                <p>Semester 4</p>
                <p>Year 2025</p>
             <a href="download.php?id=5">
                <Button>Download</Button>
             </a>
            </div>

            <div class="card" data-year="2025" data-sem="Sem-4" class="title">
                <h2>IOT</h2><br>
                <p>Semester 4</p>
                <p>Year 2025</p>
             <a href="download.php?id=6">
                <Button>Download</Button>
             </a>
            </div>
        </div>

    </div>

    <script>

        let yearSelect = document.getElementById("year");
        let semSelect = document.getElementById("sem");
        let searchInput = document.getElementById("first");

        yearSelect.addEventListener("change", filterCards);
        semSelect.addEventListener("change", filterCards);
        searchInput.addEventListener("keyup", filterCards);

        function filterCards() {

            let selectedYear = yearSelect.value;
            let selectedSem = semSelect.value;
            let searchText = searchInput.value.toLowerCase();

            let cards = document.querySelectorAll(".card");

            cards.forEach(function (card) {

                let year = card.getAttribute("data-year");
                let sem = card.getAttribute("data-sem");
                let subject = card.querySelector("h2").innerText.toLowerCase();

                let matchYear = (selectedYear === "YEAR" || selectedYear === year);
                let matchSem = (selectedSem === "" || selectedSem === sem);
                let matchSearch = subject.includes(searchText);

                if (matchYear && matchSem && matchSearch) {
                    card.style.display = "block";
                } else {
                    card.style.display = "none";
                }

            });
        }

    </script>

</body>

</html>