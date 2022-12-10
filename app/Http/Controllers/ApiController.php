<?php

namespace App\Http\Controllers;

use App\Models\Dress;
use App\Models\Shoe;
use App\Models\Accesory;
use App\Models\Visaget;
use App\Models\Work;
use App\Models\Gallary;
use App\Models\Adress;
use App\Models\Abdress;
use App\Models\Fotogallary;



use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/dresses",
     *     tags={"Weddings Dresses"},
     *     summary="Wedding Dresses",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getdress",
     *     @OA\Parameter(
     *         name="wdresses",
     *         in="query",
     *         description="All DRESSES",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     ),
     *      security={
     *         {"bearer_token": {}}
     *     },
     * )
     */
    public function getdress(Request $req)
    {
        try {
            $data = Dress::all();
            return response()->json([
                'ok' => true,
                'data' => $data,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/abdresses",
     *     tags={"Abaya Dresses"},
     *     summary="Abaya Dresses",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getabdress",
     *     @OA\Parameter(
     *         name="abdress",
     *         in="query",
     *         description="All DRESSES",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     ),
     *      security={
     *         {"bearer_token": {}}
     *     },
     * )
     */
        public function getabdress(Request $req)
    {
        try {
            $data = Abdress::all();
            return response()->json([
                'ok' => true,
                'data' => $data,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/fotogallaries",
     *     tags={"BEATY SALON FOTOGALLARY"},
     *     summary="FOTOGALLARY",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getfotogallary",
     *     @OA\Parameter(
     *         name="fotogallary",
     *         in="query",
     *         description="All Gallary",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     ),
     *      security={
     *         {"bearer_token": {}}
     *     },
     * )
     */
            public function getfotogallary(Request $req)
    {
        try {
            $data = Fotogallary::all();
            return response()->json([
                'ok' => true,
                'data' => $data,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/shoes",
     *     tags={"SHOES"},
     *     summary="SHOES",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getshoes",
     *     @OA\Parameter(
     *         name="shoes",
     *         in="query",
     *         description="All Shoes",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     ),
     *      security={
     *         {"bearer_token": {}}
     *     },
     * )
     */
    public function getshoes(Request $req)
    {
        try {
            $data = Shoe::all();
            return response()->json([
                'ok' => true,
                'data' => $data,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/accesories",
     *     tags={"ACCESOIRES"},
     *     summary="ACCESORIES",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getaccesories",
     *     @OA\Parameter(
     *         name="accesories",
     *         in="query",
     *         description="All accesories",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     ),
     *      security={
     *         {"bearer_token": {}}
     *     },
     * )
     */
    public function getaccesories(Request $req)
    {
        try {
            $data = Accesory::all();
            return response()->json([
                'ok' => true,
                'data' => $data,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/works",
     *     tags={"ACCESORIES WORKS"},
     *     summary="Beaty Salon",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getworks",
     *     @OA\Parameter(
     *         name="fotogallary",
     *         in="query",
     *         description="All Gallary",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     ),
     *      security={
     *         {"bearer_token": {}}
     *     },
     * )
     */
    public function getworks(Request $req)
    {
        try {
            $data = Work::all();
            return response()->json([
                'ok' => true,
                'data' => $data,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/gallaries",
     *     tags={"Abaya Gallaries"},
     *     summary="Gallaries",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getgallaries",
     *     @OA\Parameter(
     *         name="abgallaries",
     *         in="query",
     *         description="All Gallary",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     ),
     *      security={
     *         {"bearer_token": {}}
     *     },
     * )
     */
    public function getgallaries(Request $req)
    {
        try {
            $data = Gallary::all();
            return response()->json([
                'ok' => true,
                'data' => $data,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/adresses",
     *     tags={"Abaya Dresses"},
     *     summary="AbayaDresses",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getadresses",
     *     @OA\Parameter(
     *         name="abgallaries",
     *         in="query",
     *         description="All Abya Dresses",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     ),
     *      security={
     *         {"bearer_token": {}}
     *     },
     * )
     */
    public function getadresses(Request $req)
    {
        try {
            $data = Adress::all();
            return response()->json([
                'ok' => true,
                'data' => $data,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/visagets",
     *     tags={"Visagets WORKS"},
     *     summary="Visagets WORKS",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getvisagets",
     *     @OA\Parameter(
     *         name="abgallaries",
     *         in="query",
     *         description="All Abya Dresses",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     ),
     *      security={
     *         {"bearer_token": {}}
     *     },
     * )
     */
    public function getvisagets(Request $req)
    {
        try {
            $data = Visaget::all();
            return response()->json([
                'ok' => true,
                'data' => $data,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }
}
