// let data = [
//   {
//     day: 'Sunday',
//     expenditure: '200',
//   },
//   {
//     day: 'Monday',
//     expenditure: '300',
//   },
//   {
//     day: 'Tuesday',
//     expenditure: '140',
//   },
//   {
//     day: 'Wednesday',
//     expenditure: '180',
//   },
//   {
//     day: 'Thursday',
//     expenditure: '175',
//   },
//   {
//     day: 'Friday',
//     expenditure: '120',
//   },
//   {
//     day: 'Saturday',
//     expenditure: '450',
//   },
// ];

// let font_size = 15;

// let maxY = getMax(data)+(.2*getMax(data))

// let verticalOffset = 50;

// let h = 360;
// let we = 400;

// let verticalAxis = getVerticalAxis(maxY, h/verticalOffset);


// function getVerticalAxis(maxY, n){
//   let portion = Math.floor(maxY/n);
//   let v = [];
//   for(let i = 0; i <=n; i++){
//     v.push(maxY)
//     maxY = maxY - portion;
//   }
//   return v;
// }

// function getMax(data){
//   let expenditure = []
//   data.forEach( elem => expenditure.push(elem.expenditure) );

//   return Math.max(...expenditure)
// }

// function setup(){
//   let canvas = createCanvas(we,h)

//   canvas.parent('chart-p5');
// }

// function getY(y){
//   return map(y, 0, height, verticalAxis[verticalAxis.length-1], -maxY)
// }

// function draw(){
//   background(255)
//   textFont('Montserrat, sans-serif')
//   textSize(font_size);
//   strokeWeight(1)
//   fill(220,221, 229)
//   for(let i = 0; i<=height; i=i+verticalOffset){

//     //
//     // Set the label data to one of the vertical axis and negate
//     // the vertical offset to correct for the point being offset
//     //

//     let labelData = verticalAxis[i/verticalOffset]+verticalOffset

//     // text(labelData, 0, i);
//     for(let j = 0; j<=width; j=j+10){
//       point(j+verticalOffset, i+verticalOffset, 8)
//     }
//   }

//   strokeWeight(5)
//   translate(0, width)
//   console.log(getY(400))

//   for(let i = 50; i <= width; i=i+((width-100)/data.length)){
//     for(let j = 0; j < data.length; j++){
//       data[j].x = i;
//       data[j].y = getY(data[j].expenditure);
//     }
//   }

//   for(let j = 0; j <= data.length; j++){
//     point(j+((width-100)/data.length), data[j].y)
//     text(data[j].expenditure, j+((width-100)/data.length), data[j].y)
//   }

// }