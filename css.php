body {
    font-family: 'Segoe UI', sans-serif;
    margin: 0;
    
    background: linear-gradient(to right, #8977d1, #816aad);
    /*  #725cc9, #5b4882 */
}

/* Header */
header {
    background: #242424;
    color: white;
    padding: 15px;
    text-align: center;
}

nav a {
    color: rgb(226, 221, 221);
    margin: 10px;
    text-decoration: none;
    font-weight: bold;
}

nav a:hover {
    color: #4d4591;
}

/* Section Card */
section {
    margin: 40px auto;
    width: 80%;
    background: rgb(149, 115, 149);
    padding: 25px;
    border-radius: 15px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.2);
    text-align: center;
    animation: fadeIn 1s ease-in;
}

/* Form */
form {
    width: 350px;
    margin: 40px auto;
    background: white;
    padding: 25px;
    border-radius: 15px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.2);
}

input, textarea {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border-radius: 8px;
    border: 1px solid #ccc;
    transition: 0.3s;
}

input:focus, textarea:focus {
    border-color: #3a3a3a;
    box-shadow: 0 0 5px #2a2a2a;
    outline: none;
}

/* Button */
button {
    width: 100%;
    padding: 12px;
    background: rgb(23, 35, 23);
    color: rgb(246, 242, 242);
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-size: 16px;
    transition: 0.3s;
}

button:hover {
    background: rgb(37, 31, 26);
    transform: scale(1.05);
}

/* Cards */
.card-container {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
}

.card {
    background: #ddd2d2;
    padding: 20px;
    margin: 10px;
    border-radius: 10px;
    width: 220px;
    transition: 0.3s;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

/* Table */
table {
    width: 90%;
    margin: 20px auto;
    border-collapse: collapse;
    background: white;
}

th, td {
    padding: 10px;
    border: 1px solid #ddd;
}

th {
    background: rgb(134, 129, 123);
    color: white;
}

tr:hover {
    background: #f2f2f2;
}

/* Animation */
@keyframes fadeIn {
    from {opacity: 0;}
    to {opacity: 1;}
}

.footer {
    background: #222;
    color: white;
    padding: 30px 20px;
}

.footer-container {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
}

.footer-section {
    margin: 10px;
}

.footer-section h3 {
    margin-bottom: 10px;
}

.footer-section a {
    color: #ccc;
    text-decoration: none;
}

.footer-section a:hover {
    color: white;
}

.footer-bottom {
    text-align: center;
    margin-top: 20px;
    border-top: 1px solid #555;
    padding-top: 10px;
}
