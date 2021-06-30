@extends('layout.main')

@section('content')
    <div class="row">
        <div class="row">
            <form>
                <div class="row">
                    <div class="col-6">
                        <label
                            for="formFile"
                            class="form-label"
                            >
                        </label>
                        <input
                            type="file"
                            id="formFile"
                            class="form-control"
                        >
                    </div>
                    <div class="col-2 mt-2">
                        <input
                            type="submit"
                            value="Submit"
                            class="form-control"
                        >
                    </div>
                </div>
            </form>
        </div>

        <div class="row">
            <h4>Pain Management</h4>
            <table class="table table-striped">
                <caption>Data imported by JSON file</caption>
                <tr class="text-center">
                    <th
                        scope="col"
                        rowspan="4"
                        class="bg-warning align-middle col-2"
                        >Acetaminophen <br>
                        (Tylenol)
                    </th>
                    <th scope="col">Gene</th>
                    <th scope="col">Genotype</th>
                    <th scope="col"
                        class="bg-warning"
                        >Phenotypes / Patient Impact
                    </th>
                    <th
                        rowspan="4"
                        scope="col"
                        class="align-middle col-4 fw-normal"
                        >Patients with this genotype are expected to have a Poor response to Tylenol. Physicians should follow FDA label recommendations
                    </th>
                </tr>

                <tr class="text-center">
                    <td>FakeGene1</td>
                    <td>WT/WT</td>
                    <td class="bg-warning">Normal Metabolizer</td>
                </tr>

                <tr class="text-center">
                    <td>FakeGene2</td>
                    <td>WT/WT</td>
                    <td class="bg-warning">Poor Metabolizer</td>
                </tr>

                <tr class="text-center">
                    <td colspan="2"
                        class="fw-bold text-white bg-warning"
                        >Caution
                    </td>
                    <td class="fw-bold text-white bg-warning">Decreased Efficacy</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
<strong></strong>
