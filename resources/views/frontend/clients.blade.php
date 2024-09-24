@extends('frontend.layouts.app')

@section('title', 'Our Clients - ' . config('app.name'))

@section('content')
    <table style="height: 211px;" border="0" width="359" cellspacing="0" cellpadding="0">
        <tbody>
            <tr>
                <td valign="top" width="210">
                    <p style="line-height: 21px">Coca Cola<br />
                        Reckitt Benckiser<br />
                        PZ Cussons East Africa<br />
                        East African Breweries<br />
                        Furntiure Palace<br />
                        Victoria Furniture<br />
                        Kings way Tyres<br />
                        General Motors<br />
                        CMC<br />
                        Toyota<br />
                        Wrigley’s</p>
                </td>
                <td valign="top" width="219">
                    <p style="line-height: 21px">Unilever<br />
                        Proctor and Gamble<br />
                        Multichoice<br />
                        Kenya<br />
                        Airtel<br />
                        Slumberland<br />
                        Kenya Commercial Bank<br />
                        Barclays Bank<br />
                        I&amp;M Bank<br />
                        Cadbury<br />
                        Among Others&#8230;</p>
                </td>
            </tr>
        </tbody>
    </table>
@endsection
