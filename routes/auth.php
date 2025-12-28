<!-- <?php

// use App\Actions\Fortify\CreateNewUser;
// use App\Actions\Fortify\ResetUserPassword;
// use App\Http\Controllers\Auth\LoginController;
// use App\Http\Controllers\Auth\RegisterController;
// use App\Http\Controllers\Auth\ForgotPasswordController;
// use App\Http\Controllers\Auth\ResetPasswordController;
// use App\Http\Controllers\Auth\EmailVerificationController;
// use App\Http\Controllers\Auth\ConfirmPasswordController;
// use Illuminate\Support\Facades\Route;
// use Laravel\Fortify\Fortify;

// Route::middleware('guest')->group(function () {
//     // Registro
//     Route::get('register', [CreateNewUser::class, 'create'])->name('register');
//     Route::post('register', [CreateNewUser::class, 'store']);
    
//     // Login
//     Route::get('login', [LoginController::class, 'create'])->name('login');
//     Route::post('login', [LoginController::class, 'store']);
    
//     // Esqueci a senha
//     Route::get('forgot-password', [ForgotPasswordController::class, 'create'])->name('password.request');
//     Route::post('forgot-password', [ForgotPasswordController::class, 'store'])->name('password.email');
    
//     // Reset de senha
//     Route::get('reset-password/{token}', [ResetUserPassword::class, 'create'])->name('password.reset');
//     Route::post('reset-password', [ResetUserPassword::class, 'store'])->name('password.update');
// });

// Route::middleware('auth')->group(function () {
//     // Verificação de email
//     Route::get('verify-email', [EmailVerificationController::class, 'notice'])->name('verification.notice');
//     Route::get('verify-email/{id}/{hash}', [EmailVerificationController::class, 'verify'])
//         ->middleware(['signed', 'throttle:6,1'])
//         ->name('verification.verify');
//     Route::post('verify-email', [EmailVerificationController::class, 'send'])->name('verification.send');
    
//     // Confirmação de senha
//     Route::get('confirm-password', [ConfirmPasswordController::class, 'create'])->name('password.confirm');
//     Route::post('confirm-password', [ConfirmPasswordController::class, 'store'])->name('password.confirm.store');
    
//     // Logout
//     Route::post('logout', [LoginController::class, 'destroy'])->name('logout');
    
//     // Dashboard (protegido)
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// }); -->