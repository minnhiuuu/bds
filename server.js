import { exec } from "child_process";

// Lệnh chạy Laravel server
const laravelServer = exec("php artisan serve --host=127.0.0.1 --port=8000");

laravelServer.stdout.on("data", (data) => {
    console.log(`Laravel: ${data}`);
});

laravelServer.stderr.on("data", (data) => {
    console.error(`Lỗi Laravel: ${data}`);
});

laravelServer.on("close", (code) => {
    console.log(`Laravel server đã dừng với mã: ${code}`);
});
