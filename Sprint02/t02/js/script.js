let name, gender, age, description;

name = prompt('What animal is the superhero most similar to?');

if (name.length > 20 || /\w*\s+\w*/.test(name) || /[\d]/i.test(name)) {
    alert('Name error, try again'); 
}
else {
    gender = prompt('Is the superhero male or female? Leave blank if unknown or other.');
    if (!/male/i.test(gender) && !/female/i.test(gender) && gender.length != 0) {
        alert('Gender error, try again');
    }
    else {
        age = prompt('How old is the superhero?')
        if(age.length > 5 || !/[0-9]/.test(age) || /^0.*/.test(age)) {
            alert('Age error, try again'); 
        }
        else {
            if (age < 18) {
                if (gender == "female") {
                    description= "girl";
                }
                if (gender == "male") {
                    description= "boy";
                }
                if (gender.length == 0) {
                    description= "kid";
                }
            }
            else if (age >= 18) {
                if (gender == "female") {
                    description= "woman";
                }
                if (gender == "male") {
                    description= "man";
                }
                if (gender.length == 0) {
                    description= "hero";
                }
            }

            alert(`The superhero name is: ${name}-${description}!`);
        }
    }
}

