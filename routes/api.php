<?php



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResources([
    'analytic' => AnalyticController::class,
    'asking-price' => AskingPriceController::class,
    'block' => BlockController::class,
    'bnd-kapbnk' => BndKapbnkController::class,
    'board' => BoardController::class,
    'book' => BookController::class,
    'broker-member' => BrokerMemberController::class,
    'broker-trader' => BrokerTraderController::class,
    'closing-info' => ClosingInfoController::class,
    'common-purpose-add' => CommonPurposeAddController::class,
    'common-purse' => CommonPurseController::class,
    'common-purse-temp' => CommonPurseTempController::class,
    'conclusion' => ConclusionController::class,
    'conclusion-ftp' => ConclusionFtpController::class,
    'conclusion-value' => ConclusionValueController::class,
    'execution' => ExecutionController::class,
    'indicator' => IndicatorController::class,
    'ipo' => IpoController::class,
    'ipo-order' => IpoOrderController::class,
    'issuer' => IssuerController::class,
    'issuer-report' => IssuerReportController::class,
    'isu-indicator' => IsuIndicatorController::class,
    'isu-info' => IsuInfoController::class,
    'isu-info-files' => IsuInfoFileController::class,
    'krx-ftps' => KrxFtpController::class,
    'legislation' => LegislationController::class,
    'list-of-info' => ListofInfoController::class,
    'list-of-sample' => ListofSampleController::class,
    'list_rpt_osnpok_det' => ListRptOsnpokDetController::class,
    'list_rpt_osnpok_header' => ListRptOsnpokHeaderController::class,
    'noun-fact' => NounFactController::class,
    'noun-fact-item' => NounFactItemController::class,
    'noun-fact-item-value' => NounFactItemValueController::class,
    'photo' => PhotoController::class,
    'po' => PoController::class,
    'prc' => PrcController::class,
    'price-index-ftp' => PriceIndexFtpController::class,
    'price_indice' => PriceIndiceController::class,
    'qna' => QnaController::class,
    'recruit' => RecruitController::class,
    'regulation' => RegulationController::class,
    'report-field' => ReportFieldController::class,
    'report-header' => ReportHeaderController::class,
    'report-label' => ReportLabelController::class,
    'report' => ReportController::class,
    'report-tmpl' => ReportTmplController::class,
    'report-tmpl-value' => ReportTmplValueController::class,
    'report-value' => ReportValueController::class,
    'rule' => RuleController::class,
    'sample' => SampleController::class,
    'shareholder' => ShareholderController::class,
    't24' => T24Controller::class,
    'tci' => TciController::class,
    'tmp20180428-isu-info' => Tmp20180428IsuInfoController::class,
    'trade-result' => TradeResultController::class,
    'udp-header' => UdpHeaderController::class,
    'udp-message' => UdpMessageController::class,
    'upload' => UploadController::class,
    'video' => VideoController::class,
]);

Route::get('/users', 'UserController@users')->name('users');
Route::get('/user-info/{id}', 'UserController@userInfo')->name('user.info');

Route::get('/user-issuer/subscriptions/{id}', 'UserController@issuerSubscriptions')->name('user.issuer.subscriptions');
Route::get('/user-broker/subscriptions/{id}', 'UserController@brokerSubscriptions')->name('user.broker.subscriptions');
Route::post('/user-info/edit/{id}', 'UserController@infoEdit')->name('user.info.edit');
Route::post('/user-password/update/{id}', 'UserController@passwordUpdate')->name('user.password.update');
Route::post('/user-image/update/{id}', 'UserController@imageUpdate')->name('user.image.update');
Route::post('/user-image/delete/{id}', 'UserController@imageDelete')->name('user.image.delete');

Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::post('/register', 'Auth\RegisterController@register')->name('register');
