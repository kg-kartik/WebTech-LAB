var inputs = document.querySelectorAll("#input");
var output = document.getElementById("output");
var main_output = document.getElementById("main-output");

const removeZero = () => {
    var currentValue = output.innerHTML;
    if (currentValue == "0") {
        currentValue = " ";
        document.getElementById("output").innerHTML = currentValue;
    }
};

inputs.forEach((input) => {
    input.addEventListener("click", () => {
        removeZero();
        output.innerHTML += input.innerHTML;
    });
});

const clearAll = () => {
    output.innerHTML = "0";
    main_output.innerHTML = "";
};

const clearPrevious = () => {
    var currentOutput = output.innerHTML;
    output.innerHTML = currentOutput.substring(0, currentOutput.length - 1);
};

const calculate = () => {
    var equation = output.innerHTML;

    if (equation.substring(0, 4) === " sin") {
        main_output.innerHTML = Math.sin(
            equation.substring(4, equation.length)
        ).toFixed(3);
    } else if (equation.substring(0, 4) === " cos") {
        main_output.innerHTML = Math.cos(
            equation.substring(4, equation.length)
        ).toFixed(3);
    } else if (equation.substring(2, 3) === "^") {
        main_output.innerHTML = Math.pow(
            equation.substring(1, 2),
            equation.substring(3, 4)
        );
    } else {
        var solution = eval(equation);
        main_output.innerHTML = solution;
    }
};
