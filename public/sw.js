self.addEventListener("push", (e)=>{
    let notification = e.data.json();

    const options = {
        body:notification.body,
        icon:"https://i.ibb.co/WDLKDCT/jermaloo.jpg",
        data:{url:notification.url}

    }

    
    e.waitUntil(self.registration.showNotification(notification.title,options))
})

self.addEventListener("notificationclick", (e)=>{
    e.waitUntil(clients.openWindow(e.notification.data.url))
})