console.log("in-class-4.js loaded!");

const array=[1, 2, 3, 4, 5];

for(let i=0; i<array.length; i++)
{
   if(array[i]==1 || array[i]==3 || array[i]==5)
    {
        console.log(`${array[i]} is odd`);
        }
    else if(array[i]==2 || array[i]==4)
    {
        console.log(`${array[i]} is even!`);
    }
}