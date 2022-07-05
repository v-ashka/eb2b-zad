var usersArr = [
    {username: 'Jan Kowalski', birthYear: 1983, salary: 4200},
    {username: 'Anna Nowak', birthYear: 1994, salary: 7500},
    {username: 'Jakub Jakubowski', birthYear: 1985, salary: 18000},
    {username: 'Piotr Kozak', birthYear: 2000, salary: 4999},
    {username: 'Marek Sinica', birthYear: 1989, salary: 7200},
    {username: 'Kamila Wiśniewska', birthYear: 1972, salary: 6800},
];

const welcomeUsers = (array) => {
    array.map((user) => {
        const today = new Date().getFullYear();
        const obliczony_wiek_rocznikowy = today - user.birthYear;

        if (user.salary > 15_000) {
            console.log('Witaj prezesie!');
        } else if (user.salary < 5_000) {
            console.log(`${user.username}, szykuj się na podwyżkę!`);
        }else if (user.birthYear % 2 === 0) {
            console.log(`Witaj, ${user.username}! w tym roku kończysz ${obliczony_wiek_rocznikowy} lat!`);
        }else if(user.birthYear % 2 === 1){
            console.log(`${user.username}, jesteś zwolniony!`);
        }
    })
}

welcomeUsers(usersArr);
