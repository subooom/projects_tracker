<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ParadiseInSelf API</title>
  <link rel="stylesheet" href="/dependencies/bulma/css/bulma.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Baloo+2&display=swap">

  <style>

    *{
      font-family: 'Baloo 2', cursive;
      margin:0;
      padding: 0;
          box-sizing: border-box;
    }
    .header{
      background: #00ff1345;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .logo{
        color: #8529ff;
        font-size: 2em;
        letter-spacing: 5px;
    }
    body{
      color: #4a4a4a;
      font-size: 1em;
      font-weight: 400;
      line-height: 1.5;
      display: grid;
      grid-template-rows: 10vh 70vh 10vh;
      height: 100vh;
      overflow: hidden;
    }
    .side-bar-legend{
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      background:#c1fac1;
    }
    .main-content{
      display: grid;
      grid-template-columns: 200px auto;
      grid-gap: 30px;
    }
    .introduction{
      margin-bottom: 50px;
    }
    .main-body{
      padding-bottom: 60px;
      padding-top: 90px;
      overflow-y: scroll;
    }
    .title{
      font-size: 2em;
      font-weight: 500;
    }
    .table-full-width{
      width: 100%;
    }
    .api-item{
      margin-bottom: 30px;
    }
    .table-full-width tbody tr th,
    .table-full-width tbody tr td{
      text-align: center
    }
    .footer{
      background: #00ff1345
    }
    .footer a, .side-bar-legend a{
      transition: all .3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
      color: #8529ff;
      font-weight: 600;
    }
    .footer a:hover,
    .side-bar-legend a:hover{
      color: #62b6e7;
    }
  </style>
</head>
<body>
  <div class="header">
    <h2 class="logo">paradiseinself api</h2>
  </div>
  <div class="main-content">
    <div class="side-bar-legend">
      <h1 class="title">Legend</h1>
      <div class="link">
        <a href="#introduction">Introduction</a>
      </div>
      @foreach($data['data'] as $item)
        <div class="link">
          <a href="#{{strtolower($item['name'])}}">{{$item['name']}}</a>
        </div>
      @endforeach
    </div>
    <div class="main-body">
      <div class="introduction" id="introduction">
        <h1 class="title">Introduction</h1>
        <p>For the time being, all of the following URLS start with a trailing <code>http://localhost:8000/</code>. Although in Laravel, you can get away with just requesting to just <code>/</code> as shown below. Plans to publicize the doman remain intact.</p>
      </div>
      <div class="api">
        @foreach($data['data'] as $item)
          <div class="api-item" id="{{strtolower($item['name'])}}">
            <h1 class="title">{{$item['name']}}</h1>
            <table class="table table-full-width">
              <thead>
                <tr>
                  @foreach($data['header_tags'] as $header)
                    <th><abbr title="{{$header[1]}}">{{$header[0]}}</abbr></th>
                  @endforeach
                </tr>
              </thead>
              <tbody>
                @foreach($item['api'] as $table_data)
                  <tr>
                    @foreach($table_data as $i)
                      <th>{!!$i!!}</th>
                    @endforeach
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        @endforeach
      </div>
    </div>
  </div>

  <div class="footer">
    Copyright @ <a href="http://paradiseinself.com/" target="_blank">paradiseinself.com</a>

  </div>

</body>
</html>