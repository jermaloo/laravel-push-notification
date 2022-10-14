<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        navigator.serviceWorker.register('sw.js');

        async function subscribe() {
            let sw = await navigator.serviceWorker.ready;
            let push = await sw.pushManager.subscribe({
                userVisibleOnly:true,
                applicationServerKey:"BBZ2vqSxZKvGJ_U_KZOWT1BTbFZnvoz44KPZUxnRBEogHDtid9ghKDEHpRxz6W_iIENdjv92cOXbUCTURwa6gg8"
            });

            console.log(JSON.stringify(push));

        }
    </script>

    <button onclick="subscribe()">subscribe</button>
</body>
</html>