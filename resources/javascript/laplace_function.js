function laplaceTransform(inputFunction) {
    // Compute the Laplace transform of the input function
    let laplace = '';
    let s = 's';
    let i = 0;
    while (i < inputFunction.length) {
      let char = inputFunction[i];
      if (!isNaN(char) || char == 't' || char == '.') {
        let j = i;
        while (j < inputFunction.length && (!isNaN(inputFunction[j]) || inputFunction[j] == '.')) {
          j += 1;
        }
        let term = inputFunction.slice(i, j);
        if (j < inputFunction.length && inputFunction[j] == 'e' && j + 1 < inputFunction.length && inputFunction[j+1] == '^') {
          let k = j + 2;
          while (k < inputFunction.length && (!isNaN(inputFunction[k]) || inputFunction[k] == '.')) {
            k += 1;
          }
          let exp = inputFunction.slice(j + 2, k);
          term = term + 'exp(-' + exp + s + ')';
          j = k;
        }
        laplace += term;
        i = j;
      } else if (char == '*' || char == '/') {
        laplace += char;
        i += 1;
      } else if (char == 'e') {
        laplace += 'Math.exp';
        i += 1;
      } else if (char == '^') {
        laplace += '**';
        i += 1;
      } else if (char == '{') {
        let j = i;
        let depth = 1;
        while (depth > 0 && j < inputFunction.length) {
          j += 1;
          if (inputFunction[j] == '{') {
            depth += 1;
          } else if (inputFunction[j] == '}') {
            depth -= 1;
          }
        }
        let piecewise = inputFunction.slice(i, j + 1);
        laplace += piecewise + '(' + s + ')';
        i = j + 1;
      } else {
        laplace += char + '(' + s + ')';
        i += 1;
      }
    }
  
    // Output the solution in steps
    console.log('\\mathcal{L}\\{' + inputFunction + '\\} = \\mathcal{L}\\{' + laplace + '\\}');
  }
  
  // Example usage
  let inputFunction = '(t^2 + 2*Math.sin(3*t))*Math.exp(-2*t)';
  laplaceTransform(inputFunction);
  