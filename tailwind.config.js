module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                // contoh kalo mau nambah warna
                // "example-blue": "#2484C6",
            },
            fontFamily: {
                "concert-one": ['"Concert One"'],
                "encode-sans": ['"Encode Sans"'],
            },
            spacing: {
                108: "28rem",
                112: "32rem",
                128: "36rem",
                136: "40rem",
                142: "44rem",
                148: "48rem",
            },
            margin: {
                "1/10": "10%",
                "1.5/10": "15%",
                "2/10": "20%",
                "3/10": "30%",
                "3.5/10": "35%",
                "4/10": "40%",
                "5/10": "50%",
                "6/10": "60%",
                "7/10": "70%",
                "8/10": "80%",
                "9/10": "90%",
            },
            width: {
                "vw-30": "30vw",
                "vw-40": "40vw",
                "vw-50": "50vw",
                "vw-55": "55vw",
                "vw-60": "60vw",
                "vw-65": "65vw",
                "vw-70": "70vw",
                "vw-80": "80vw",
                "vw-90": "90vw",
                "1/10": "10%",
                "2/10": "20%",
                "3/10": "30%",
                "3.5/10": "35%",
                "4/10": "40%",
                "5/10": "50%",
                "6/10": "60%",
                "7/10": "70%",
                "8/10": "80%",
                "9/10": "90%",
                "2px": "2px",
            },
            height: {
                "vh-5": "5vh",
                "vh-10": "10vh",
                "vh-20": "20vh",
                "vh-25": "25vh",
                "vh-30": "30vh",
                "vh-40": "40vh",
                "vh-50": "50vh",
                "vh-55": "55vh",
                "vh-60": "60vh",
                "vh-65": "65vh",
                "vh-70": "70vh",
                "vh-80": "80vh",
                "vh-90": "90vh",
                "1/10": "10%",
                "2/10": "20%",
                "3/10": "30%",
                "3.5/10": "35%",
                "4/10": "40%",
                "5/10": "50%",
                "6/10": "60%",
                "7/10": "70%",
                "8/10": "80%",
                "9/10": "90%",
                "2px": "2px",
            },
            inset: {
                "1/5": "20%",
                "2/5": "40%",
                "3/5": "60%",
                "4/5": "80%",
                "1/2": "50%",
                "1/10": "10%",
                "2/10": "20%",
                "3/10": "30%",
                "3.5/10": "35%",
                "4/10": "40%",
                "5/10": "50%",
                "6/10": "60%",
                "7/10": "70%",
                "8/10": "80%",
                "9/10": "90%",
            },
            zIndex: {
                "-10": "-10",
                "-20": "-20",
                "-30": "-30",
                "-40": "-40",
            },
        },
    },
    variants: {
        extend: {
            backgroundImage: ["hover"],
        },
    },
    plugins: [],
};