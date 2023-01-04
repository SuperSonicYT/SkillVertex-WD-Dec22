
        function add() {     //tradtional method
            //program
        }

        var notification = () => {    //modernmethod
            var student = {
        stud_name: {
            firstname:"Akash",
            middlename:"",
            lastname:"Soni"
        },
        roll_no:34,
        address: {
            permanent_address: {
                house_no:"344A",
                house_name:"Ranka colony",
                street:"Ranka colony road",
                city:"",
                state:"",
                pincode:""
            },
            termporary_address: {
                same_as_perm:"yes",
                house_no:"",
                house_name:"",
                street:"",
                city:"",
                state:"",
                pincode:""
            },
            guardian: ['father','45345','address','mother','32423','address'],
            fullname: function() {
                return this.stud_name.firstname+" "+this.stud_name.middlename+" "+this.studentname.lastname;
            }
        }
    }
    for(value in student.address) {
        document.write(student.address[value]);
    }
        }


        var errhandling = () => {
            var inp=document.getElementById('inp').value;
            console.log(inp);
            try {
                if (isNaN(inp)) throw 'is not a number';
                if (inp=="") throw 'is empty';
                if (inp<5) throw 'is less than 5';
                if (inp>10) throw 'is greater than 10';
            }
            catch(err) {
                document.getElementById('op').innerText='Input '+err;
            }
        }

// input
document.write('This is Javascript');
    var abc="value";   //variable
    const def="constant value";   // costant variable
    let xyz="value";    //block variable


    if(x<100) {
        let _xyz=0;
    }







// storage
    var x = 'sfsfsf';
    var y = 3423342;
    var z = true;
    
    var a='';  // trivial datatype
    var b;     //undefined datatype
    b=45;

    var arr=['32423423',564,'dsfsdf',true];

    var obj = {                          // values - string,int,boolean,arrays,objects,functions
        property1:'value1',
        property2:'value2',
        property3: {
            property3_1:  {
                property3_1_1:[342234,234324,332434]
            },
            property3_2: function() {
                //
            }
        }
    }

    


// branching  ( if , if...else , if...else if , switch case )
    if(condition) {

    }



    if(condition) {

    }
    else {

    }



    if(condition) {

    }
    else if(condition) {

    }
    else if(condition) {

    }
    else {

    }



    switch(condition) {
        case val1:
            // val1 stmts;
            break;
        default:
            //default stmt;

    }

// looping ( while , for , do while , for...in )

//error handling
    
    try {
        if(isNAN(a)) throw 'value not a number';
    }
    catch(err) {
        //err = throw string
    }
//output
    document.write('');
    document.getElementById("").innerHTML='';
    window.alert();   window.confirm();   window.prompt();
    console.log('');
    window.print();

// operators
    + - * / %    --arithmetic operators

    > < >= <= == != ===    --comparison operators

    && || !    --logical operators

    = += -= *= /= %=    --assignment operators

    (conditional expression) ? statement if true : statement if false ;        --conditional operator/ternary operator
